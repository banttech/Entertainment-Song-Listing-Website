<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = DB::table('authors')->latest()->paginate(10);
        $pageTitle = 'Manage Authors';
        return view('admin.authors.index', compact('authors', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Add Author';
        return view('admin.authors.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'about' => 'required',
        ], [
            'name.required' => 'Author name field is required!',
            'image.required' => 'Author photo field is required!',
            'about.required' => 'About author field is required!',
        ]);

        $data = $request->all();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin_assets/images/authors'), $image_name);
            $data['image'] = $image_name;
        }

        DB::table('authors')->insert([
            'name' => $data['name'],
            'slug' => strtolower(str_replace(' ', '-', $data['name'])),
            'image' => $data['image'],
            'about' => $data['about'],
        ]);

        return redirect()->route('authors.index')->with('success', 'Author added successfully');
    }

    public function edit($id)
    {
        $author = DB::table('authors')->where('id', $id)->first();
        $pageTitle = 'Edit Author';
        return view('admin.authors.edit', compact('author', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'about' => 'required',
        ], [
            'name.required' => 'Author name field is required!',
            'about.required' => 'About author field is required!',
        ]);


        $request->validate([
            'name' => 'required',
            'about' => 'required',
        ]);

        $data = $request->all();
        $authorDetail = DB::table('authors')->where('id', $id)->first();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin_assets/images/authors'), $image_name);
            $data['image'] = $image_name;
        }else{
            $data['image'] = $authorDetail->image;
        }


        DB::table('authors')->where('id', $id)->update([
            'name' => $data['name'],
            'slug' => strtolower(str_replace(' ', '-', $data['name'])),
            'image' => $data['image'],
            'about' => $data['about'],
        ]);

        return redirect()->route('authors.index')->with('success', 'Author updated successfully');
    }

    public function delete($id)
    {
        DB::table('authors')->where('id', $id)->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfully');
    }
}
