<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicCategoryController extends Controller
{
    public function index()
    {  
        $pageTitle = 'Manage Music Category';
        $musicCategories = DB::table('music_categories')->latest()->paginate(10);
        return view('admin.music-categories.index', compact('pageTitle', 'musicCategories'));
    }

    public function create()
    {
        $pageTitle = 'Add Music Category';
        return view('admin.music-categories.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Category name field is required!',
            'image.required' => 'Category photo field is required!',
            'description.required' => 'Category description field is required!',
        ]);

        $data = $request->all();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin_assets/images/music-categories'), $image_name);
            $data['image'] = $image_name;
        }

        DB::table('music_categories')->insert([
            'name' => $data['name'],
            'slug' => strtolower(str_replace(' ', '-', $data['name'])),
            'image' => $data['image'],
            'description' => $data['description'],
        ]);

        return redirect()->route('music-categories.index')->with('success', 'Music Category added successfully');
    }

    public function edit($id)
    {
        $musicCategory = DB::table('music_categories')->where('id', $id)->first();
        $pageTitle = 'Edit Music Category';
        return view('admin.music-categories.edit', compact('musicCategory', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Category name field is required!',
            'description.required' => 'Category description field is required!',
        ]);

        $data = $request->all();
        $catDetail = DB::table('music_categories')->where('id', $id)->first();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin_assets/images/music-categories'), $image_name);
            $data['image'] = $image_name;
        }else{
            $data['image'] = $catDetail->image;
        }


        DB::table('music_categories')->where('id', $id)->update([
            'name' => $data['name'],
            'slug' => strtolower(str_replace(' ', '-', $data['name'])),
            'image' => $data['image'],
            'description' => $data['description'],
        ]);

        return redirect()->route('music-categories.index')->with('success', 'Music Category updated successfully');
    }

    public function delete($id)
    {
        DB::table('music_categories')->where('id', $id)->delete();
        return redirect()->route('music-categories.index')->with('success', 'Music Category deleted successfully');
    }
}
