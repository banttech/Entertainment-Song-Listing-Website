<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Make;
use App\Models\Year;
use App\Models\CarModel;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
        *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $models = CarModel::all();
        $models->load('make');
        $pageTitle = 'Manage model';
        return view('admin.models.index', compact('models', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makes = Make::all();
        $models = CarModel::all();
        $pageTitle = 'Add Model';
        return view('admin.models.create', compact('makes', 'pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'make_id' => 'required',
        ]);

        $make = CarModel::create([
            'name' => $request->name,
            'make_id' => $request->make_id
        ]);
        return redirect()->back()->with('success', 'Models Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $models = CarModel::find($id);
        $pageTitle = 'Edit Model';
        return view('admin.models.edit', compact('models', 'pageTitle'));
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
        $make = CarModel::find($id);
        $make->name = $request->name;
        $make->save();
        return redirect()->back()->with('success', 'Model Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $make = CarModel::find($id);
        $make->delete();
        return redirect()->back()->with('success', 'Model Deleted Successfully');
    }
}
