<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Make;
use App\Models\Year;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = DB::table('songs')->latest()->paginate(10);
        $pageTitle = 'Manage Songs';
        return view('admin.songs.index', compact('songs', 'pageTitle'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $search_by = $request->get('search_by');
        $sort_by = $request->get('sort_by');

        $songs = DB::table('songs')
            ->where($search_by, 'like', '%' . $search . '%')
            ->orderBy('id', $sort_by)
            ->paginate(10);

        $pageTitle = 'Manage Songs';
        return view('admin.songs.index', compact('songs', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Add Song';
        $authors = DB::table('authors')->get();
        $music_categories = DB::table('music_categories')->get();
        return view('admin.songs.create', compact('pageTitle', 'authors', 'music_categories'));
    }
    public function copyCreate()
    {
        $pageTitle = 'Add Song';
        return view('admin.songs.copyCreate', compact('pageTitle'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'authors' => 'required',
            'lyrics' => 'required',
            'family_chords' => 'required',
            'categories' => 'required',
            'image' => 'required',
            'seo_title' => 'required',
            'seo_description' => 'required',
        ]);

        $image = null;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('admin_assets/images/songs');
            $image->move($destinationPath, $name);
            $image = $name;
        }

        $songId = DB::table('songs')->insertGetId([
            'title' => $request->title,
            'lyrics' => $request->lyrics,
            'slug' => strtolower(preg_replace('/\s+/', '-', $request->title)),
            'family_chords' => $request->family_chords,
            'image' => $image,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
        ]);

        foreach ($request->authors as $author) {
            DB::table('song_has_authors')->insert([
                'song_id' => $songId,
                'author_id' => $author,
            ]);
        }
        foreach ($request->categories as $category) {
            DB::table('song_has_categories')->insert([
                'song_id' => $songId,
                'category_id' => $category,
            ]);
        }

        return redirect()->route('songs.index')->with('success', 'Song added successfully.');
    }
    public function store_copy(Request $request)
    {
        // validate
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'lyrics' => 'required'
        ]);
        // insert
        DB::table('songs')->insert([
            'title' => $request->title,
            'author' => $request->author,
            'lyrics' => $request->lyrics,
            'slug' => strtolower(preg_replace('/\s+/', '-', $request->title))
        ]);
        // redirect
        return redirect()->route('songs.index')->with('success', 'Song added successfully.');
    }
    public function edit($id)
    {
        $song = DB::table('songs')->find($id);
        $pageTitle = 'Edit Song';
        $authors = DB::table('authors')->get();
        $songAuthors = DB::table('song_has_authors')->where('song_id', $id)->pluck('author_id')->toArray();
        $songCategories = DB::table('song_has_categories')->where('song_id', $id)->pluck('category_id')->toArray();
        $music_categories = DB::table('music_categories')->get();
        return view('admin.songs.edit', compact('song', 'pageTitle', 'authors', 'songAuthors', 'music_categories', 'songCategories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'authors' => 'required',
            'lyrics' => 'required',
            'family_chords' => 'required',
            'categories' => 'required',
            'seo_title' => 'required',
            'seo_description' => 'required',
        ]);

        $song = DB::table('songs')->find($id);
        $image = $song->image;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('admin_assets/images/songs');
            $image->move($destinationPath, $name);
            $image = $name;
        }

        DB::table('songs')->where('id', $id)->update([
            'title' => $request->title,
            'lyrics' => $request->lyrics,
            'slug' => strtolower(preg_replace('/\s+/', '-', $request->title)),
            'family_chords' => $request->family_chords,
            'image' => $image,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
        ]);

        DB::table('song_has_authors')->where('song_id', $id)->delete();
        DB::table('song_has_categories')->where('song_id', $id)->delete();
        foreach ($request->authors as $author) {
            DB::table('song_has_authors')->insert([
                'song_id' => $id,
                'author_id' => $author,
            ]);
        }
        foreach ($request->categories as $category) {
            DB::table('song_has_categories')->insert([
                'song_id' => $id,
                'category_id' => $category,
            ]);
        }
        return redirect()->route('songs.index')->with('success', 'Song updated successfully.');
    }
    public function delete($id)
    {
        DB::table('songs')->where('id', $id)->delete();
        DB::table('song_has_authors')->where('song_id', $id)->delete();
        DB::table('song_has_categories')->where('song_id', $id)->delete();
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
