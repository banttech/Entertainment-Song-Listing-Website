<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Make;
use App\Models\Year;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makes = Make::all();
        $pageTitle = 'Manage Makes';
        return view('admin.makes.index', compact('makes', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makes = Make::all();
        $years = Year::all();
        $pageTitle = 'Add Make';
        return view('admin.makes.create', compact('years', 'pageTitle'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'year_id' => 'required',
        ]);
        
        $make = Make::create([
            'name' => $request->name,
            'year_id' => $request->year_id
        ]);
        return redirect()->back()->with('success', 'Make Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $make = Make::find($id);
        $pageTitle = 'Show Make';
        return view('admin.makes.show', compact('make', 'pageTitle'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $make = Make::find($id);
        $pageTitle = 'Edit Make';
        return view('admin.makes.edit', compact('make', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $make = Make::find($id);
        $make->name = $request->name;
        $make->save();
        return redirect()->back()->with('success', 'Make Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $make = Make::find($id);
        $make->delete();
        return redirect()->back()->with('success', 'Make Deleted Successfully');
    }
}
