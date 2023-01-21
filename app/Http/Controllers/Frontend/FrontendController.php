<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Year;
use App\Models\Make;
use App\Models\CarModel;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Mail\ForgetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('userDashboard');
        }
        $pageTitle = 'Home';
        if ($request->search) {
            $search = $request->get('search');
            $author = $request->get('author');
            $title = $request->get('title');
            $songs = DB::table('songs')
                ->join('song_has_authors', 'songs.id', '=', 'song_has_authors.song_id')
                ->join('authors', 'song_has_authors.author_id', '=', 'authors.id')
                ->select('songs.*', 'authors.name')
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('authors.name', 'like', '%' . $search . '%')
                ->latest()
                ->take(4)
                ->get();
        } else {
            $songs = DB::table('songs')->latest()->take(4)->get();
        }

        $totalSongs = $songs->count();
        $songAuthors = DB::table('authors')->get();
        $musicCategories = DB::table('music_categories')->get();

        return view('frontend.index', compact('songs','pageTitle', 'songAuthors', 'musicCategories', 'totalSongs'));
    }

    public function loadMoreSongs(Request $request)
    {
        if(isset($request->search) && $request->search != ''){
            $songs = DB::table('songs')
                ->join('song_has_authors', 'songs.id', '=', 'song_has_authors.song_id')
                ->join('authors', 'song_has_authors.author_id', '=', 'authors.id')
                ->select('songs.*', 'authors.name')
                ->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('authors.name', 'like', '%' . $request->search . '%')
                ->latest()
                ->take($request->songLength)
                ->get();
            $total = DB::table('songs')
                ->join('song_has_authors', 'songs.id', '=', 'song_has_authors.song_id')
                ->join('authors', 'song_has_authors.author_id', '=', 'authors.id')
                ->select('songs.*', 'authors.name')
                ->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('authors.name', 'like', '%' . $request->search . '%')
                ->count();
            $remainingSongs = $total - $request->songLength;
        }else{
            $songs = DB::table('songs')->latest()->take($request->songLength)->get();
            $remainingSongs = DB::table('songs')->count() - $request->songLength;
        }
        $moreSongs = view('frontend.load_more_songs', compact('songs'))->render();
        return response()->json(['moreSongs' => $moreSongs, 'remainingSongs' => $remainingSongs]);
    }

    public function playlists()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $pageTitle = 'Playlist';
        $user = Auth::user();
        $songs = DB::table('songs')->latest()->paginate(10);
        $playlist = [];
        $playlists = DB::table('playlists')->where('user_id', $user->id)->get();
        return view('frontend.playlist', compact('pageTitle','user','songs','playlists'));
    }
    public function showPlaylist($playlist_slug)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $pageTitle = 'Playlist Details';
        $user = Auth::user();
        $playlist = DB::table('playlists')->where([['slug', $playlist_slug], ['user_id', $user->id]])->first();
        $playlistSongs = DB::table('playlist_details')->where('playlist_id', $playlist->id)->orderBy('song_order', 'ASC')->get();
        
        if(count($playlistSongs) == 0){
            return redirect()->route('playlist');
        }
        $playlistIds = [];
        foreach($playlistSongs as $playlistSong){
            $playlistIds[] = $playlistSong->song_id;
        }

        $songs = DB::table('songs')->whereIn('id', $playlistIds)->orderByRaw(DB::raw("FIELD(id, ".implode(',', $playlistIds).")"))->paginate(1);
        // $songs = DB::table('songs')->whereIN('id', $playlistIds)->latest()->paginate(1);

        if(request()->ajax()) {
            return view('frontend.ajax_song_detail', compact('songs','playlist','playlist_slug'));
        }

        return view('frontend.playlist_details', compact('pageTitle','songs','playlist','playlist_slug'));
    }
    
    public function createPlaylist()
    {   
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $pageTitle = 'Playlist';
        $user = Auth::user();
        $songs = DB::table('songs')->latest()->get();
        return view('frontend.create_playlist', compact('pageTitle','user','songs'));
    }

    public function storePlaylist(Request $request)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $user = Auth::user();
        $request->validate([
            'title' => 'required',
            'songs' => 'required',
        ]);

        $playlist = DB::table('playlists')->where([['title', $request->title], ['user_id', $user->id]])->first();
        if($playlist){
            return redirect()->back()->with('error', ''.$request->title.' already exists.');
        }

        $playlistId = DB::table('playlists')->insertGetId([
            'user_id' => $user->id,
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'created_at' => now()
        ]);

        $songsList = explode(',', $request->song_ids);
        $i = 1;
        foreach($songsList as $song){
            DB::table('playlist_details')->insert([
                'playlist_id' => $playlistId,
                'song_id' => $song,
                'song_order' => $i,
                'created_at' => now()
            ]);
            $i++;
        }
        return redirect()->route('playlists')->with('success', 'Playlist created successfully.');
    }
    public function editPlaylist($id)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $pageTitle = 'Playlist';
        $user = Auth::user();
        $playlist = DB::table('playlists')->where('id', $id)->first();
        $playlistSongs = DB::table('playlist_details')->where('playlist_id', $id)->orderBy('song_order', 'ASC')->get();
        $playlistIds = [];
        foreach($playlistSongs as $playlistSong){
            $playlistIds[] = $playlistSong->song_id;
        }
        $songs = DB::table('songs')->latest()->get();
        
        return view('frontend.edit_playlist', compact('pageTitle','user','songs','playlistSongs','playlist','playlistIds'));
    }

    public function updatePlaylist($id, Request $request)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $user = Auth::user();
        $request->validate([
            'title' => 'required',
            'songs' => 'required',
        ]);
        DB::table('playlists')->where('id', $id)->update([
            'title' => $request->title,
            'updated_at' => now()
        ]);
        DB::table('playlist_details')->where('playlist_id', $id)->delete();

        $songsList = explode(',', $request->song_ids);
        $i = 1;
        foreach($songsList as $song){
            DB::table('playlist_details')->insert([
                'playlist_id' => $id,
                'song_id' => $song,
                'song_order' => $i,
                'created_at' => now()
            ]);
            $i++;
        }
        return redirect()->route('playlists')->with('success', 'Playlist updated successfully.');
    }
    public function deletePlaylist($id)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $user = Auth::user();
        DB::table('playlists')->where('id', $id)->delete();
        DB::table('playlist_details')->where('playlist_id', $id)->delete();
        return redirect()->route('playlists')->with('success', 'Playlist deleted successfully.');
    }
    public function addToPlaylist(Request $request, $songId)
    {

        if(!Auth::check()){
            return redirect()->route('login');
        }
        $user = Auth::user();

        DB::table('playlists')->insert([
            'user_id' => $user->id,
            'song_id' => $songId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return response()->json(['success' => 'Song added to playlist.']);
    }
    public function userDashboard(Request $request)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $pageTitle = 'Dashboard';
        $user = Auth::user();
        if ($request->search) {
            $search = $request->get('search');
            $author = $request->get('author');
            $title = $request->get('title');
            $songs = DB::table('songs')
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('author', 'like', '%' . $search . '%')
                ->orWhere('lyrics', 'like', '%' . $search . '%')
                ->latest()
                ->paginate(10);
        } else {
            $songs = DB::table('songs')->latest()->paginate(10);
        }

        return view('frontend.dashboard', compact('pageTitle','user','songs'));
    }
    public function profile()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $pageTitle = 'Profile';
        $user = Auth::user();
        return view('frontend.profile', compact('pageTitle','user'));
    }
    public function updateProfile(Request $request)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password',
            ], [
                'password.min' => 'Password must be at least 6 characters long.',
                'confirm_password.same' => 'Password and confirm password must be same.',
            ]);
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
            ]);
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        }
        
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
    public function songDetail($slug)
    {
        $song = DB::table('songs')->where('slug', $slug)->first();
        $pageTitle = $song->seo_title;
        $seoDescription = $song->seo_description;
        return view('frontend.song-details', compact('song', 'pageTitle', 'seoDescription'));
    }

    public function updateSongSetting(Request $request)
    {
        if(isset($request->lyrics_size) && !empty($request->lyrics_size)){
            $user = User::find(Auth::user()->id);
            $user->lyrics_size = $request->lyrics_size;
            $user->save();
        }
        if(isset($request->bg_color) && !empty($request->bg_color)){
            $user = User::find(Auth::user()->id);
            $user->bg_color = $request->bg_color;
            $user->save();
        }
        if(isset($request->lyrics_color) && !empty($request->lyrics_color)){
            $user = User::find(Auth::user()->id);
            $user->lyrics_color = $request->lyrics_color;
            $user->save();
        }
        if(isset($request->chords_color) && !empty($request->chords_color)){
            $user = User::find(Auth::user()->id);
            $user->chords_color = $request->chords_color;
            $user->save();
        }

        return 'setting updated';
    }

    public function authorSongs($slug)
    {
        $author = DB::table('authors')->where('slug', $slug)->first();
        $authorSong = DB::table('song_has_authors')->where('author_id', $author->id)->pluck('song_id');
        $songs = DB::table('songs')->whereIn('id', $authorSong)->latest()->take(4)->get();
        $totalSongs = DB::table('songs')->whereIn('id', $authorSong)->count();

        $authorname = $author->name;
        $pageTitle = $authorname . ' Songs';
        return view('frontend.author-songs', compact('songs', 'pageTitle', 'authorname', 'totalSongs', 'slug'));
    }

    public function loadMoreAuthorSongs(Request $request, $slug){
        $author = DB::table('authors')->where('slug', $slug)->first();
        $authorSong = DB::table('song_has_authors')->where('author_id', $author->id)->pluck('song_id');
        $songs = DB::table('songs')->whereIn('id', $authorSong)->latest()->take($request->songLength)->get();
        $totalSongs = DB::table('songs')->whereIn('id', $authorSong)->count();
        $remainingSongs = $totalSongs - $request->songLength;

        $moreSongs = view('frontend.load_more_authors_songs', compact('songs'))->render();
        return response()->json(['moreSongs' => $moreSongs, 'remainingSongs' => $remainingSongs]);
    }

    public function categorySongs($slug)
    {
        $category = DB::table('music_categories')->where('slug', $slug)->first();
        $categorySong = DB::table('song_has_categories')->where('category_id', $category->id)->pluck('song_id');
        $songs = DB::table('songs')->whereIn('id', $categorySong)->latest()->take(4)->get();
        $totalSongs = DB::table('songs')->whereIn('id', $categorySong)->count();

        $categoryname = $category->name;
        $pageTitle = $categoryname . ' Songs';
        return view('frontend.category-songs', compact('songs', 'pageTitle', 'categoryname', 'totalSongs', 'slug'));
    }

    public function loadMoreCategorySongs(Request $request, $slug){
        $category = DB::table('music_categories')->where('slug', $slug)->first();
        $categorySong = DB::table('song_has_categories')->where('category_id', $category->id)->pluck('song_id');
        $songs = DB::table('songs')->whereIn('id', $categorySong)->latest()->take($request->songLength)->get();
        $totalSongs = DB::table('songs')->whereIn('id', $categorySong)->count();
        $remainingSongs = $totalSongs - $request->songLength;

        $moreSongs = view('frontend.load_more_cat_songs', compact('songs'))->render();
        return response()->json(['moreSongs' => $moreSongs, 'remainingSongs' => $remainingSongs]);

    }

    public function newSongDetail($slug)
    {
        $song = DB::table('songs')->where('slug', $slug)->first();
        $pageTitle = 'Song Details';
        return view('frontend.new-song-details', compact('song', 'pageTitle'));
    }
    public function login()
    {
        // redirect if user is already logged in
        if (Auth::check()) {
            return redirect()->route('frontend.index');
        }
        $pageTitle = 'Login';
        return view('frontend.login.index', compact('pageTitle'));
    }
    public function signin(Request $request)
    {
       
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->is_ban == 1){
                Auth::logout();
                return redirect()->route('login')->with('error', 'Your account has been banned. Please contact Site Admin.');
            }
            if(Auth::user()->is_admin == 1){
                Auth::logout();
                return redirect()->route('login')->with('error', 'The username or password you entered is incorrect');
            }
            // Authentication passed...
            return redirect()->route('home');
        }else{
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
    public function register()
    {
        $pageTitle = 'Register';
        return view('frontend.register.index', compact('pageTitle'));
    }
    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login')->with('success', 'User created successfully');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function forgetPassword(){
        $pageTitle = 'Forget Password';
        return view('frontend.forget-password', compact('pageTitle'));
    }

    public function resetPasswordMail(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if($user){
            $token = Str::random(10);
            $user->password = Hash::make($token);
            $user->save();
            $body = [
                'newPass' => $token,
            ];
            Mail::to($user->email)->send(new ForgetPassword($body));
            return redirect()->route('login')->with('success', 'Reset password link sent to your email');
        }else{
            return redirect()->route('forgetPassword')->with('error', 'Email not found');
        }
    }

    public function faq()
    {
        $pageTitle = 'Frequently Asked Questions';
        return view('frontend.faq', compact('pageTitle'));
    }

    public function contact()
    {
        $pageTitle = 'Contact Us';
        return view('frontend.contact', compact('pageTitle'));
    }
    public function about()
    {
        $pageTitle = 'About Us';
        return view('frontend.about', compact('pageTitle'));
    }
    public function privacy()
    {
        $pageTitle = 'Privacy Policy';
        return view('frontend.privacy', compact('pageTitle'));
    }
    public function getMakes(Request $request)
    {
         $makes = Make::where('year_id', $request->year_id)->orderBy('name', 'asc')->get();
         // return select box html 
           return view('frontend.ajax-select-makes', compact('makes'))->render();
    }
    public function getModels(Request $request)
    {
       
        $models = CarModel::where('make_id', $request->make_id)->orderBy('name', 'asc')->get();
        // return select box html 
        return view('frontend.ajax-select-model', compact('models'))->render();
    }
}
