<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Circle;

class CricleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cricles = Circle::all();
        return view('admin.cricle.index', compact('cricles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cricle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'icon' => 'required',
         ]);

        $requestData = $request->all();

        Circle::create($requestData);
        return redirect()->route('admin.cricle.index')->with('seccess', 'Cricle created saccessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cricle = Circle::findOrFail($id);
        return view('admin.cricle.edit', compact('cricle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'icon'=> 'required',
         ]);

         $cricle = Circle::findOrFail($id);
         $cricle->update($request->all());
         return redirect()->route('admin.cricle.index')->with('seccess', 'Cricle updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cricle = Circle::findOrFail($id);
        $cricle->delete();
        return redirect()->route('admin.cricle.index')->with('seccess', 'Cricle deleted successfuly');
    }
}
