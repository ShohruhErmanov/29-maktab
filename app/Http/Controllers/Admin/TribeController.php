<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tribe;

class TribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tribes = Tribe::all();
        return view('admin.tribe.index', compact('tribes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tribe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'number' => 'required',
         ]);

        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/',  $image_name);
            $requestData['image'] = $image_name;
        }

        Tribe::create($requestData);
        return redirect()->route('admin.tribe.index')->with('seccess', 'Tribe created successfuly');

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
        $tribe = Tribe::findOrFail($id);
        return view('admin.tribe.edit', compact('tribe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'number' => 'required',
         ]);

         $requestData = $request->all();


         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $image_name = time() . '.' . $file->getClientOriginalExtension();
             $file->move('images/',  $image_name);
             $requestData['image'] = $image_name;
         }

        $tribe = Tribe::findOrFail($id);
        $tribe->update($requestData);
        return redirect()->route('admin.tribe.index')->with('seccess', 'Tribe updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tribe = Tribe::findOrFail($id);
        $tribe->delete();
        return redirect()->route('admin.tribe.index')->with('seccess', 'Tribe  deleted successfuly');
    }
}
