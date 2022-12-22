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
        return view('admin.songs.create', compact('pageTitle'));
    }
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'lyrics' => 'required',
        ]);
        // insert
        DB::table('songs')->insert([
            'title' => $request->title,
            'author' => $request->author,
            'lyrics' => $request->lyrics,
            'slug' => strtolower(preg_replace('/\s+/', '-', $request->title)),
        ]);
        // redirect
        return redirect()->route('songs.index')->with('success', 'Song added successfully.');
    }
    public function edit($id)
    {
        $song = DB::table('songs')->find($id);
        $pageTitle = 'Edit Song';
        return view('admin.songs.edit', compact('song', 'pageTitle'));
    }
    public function update(Request $request, $id)
    {
        // validate
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'lyrics' => 'required',
        ]);
        // update
        DB::table('songs')->where('id', $id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'lyrics' => $request->lyrics,
        ]);
        // redirect
        return redirect()->route('songs.index')->with('success', 'Song updated successfully.');
    }
    public function delete($id)
    {
        DB::table('songs')->where('id', $id)->delete();
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
