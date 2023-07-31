<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Latestnew;

class LatestnewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestnews = Latestnew::all();
        return view('admin.latestnew.index', compact('latestnews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.latestnew.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
         ]);
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/',  $image_name);
            $requestData['image'] = $image_name;
        }

        Latestnew::create($requestData);
        return redirect()->route('admin.latestnew.index')->with('seccess', 'Latest New created successfuly');
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
        $latestnew = Latestnew::findOrFail($id);
        return view('admin.latestnew.edit', compact('latestnew'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
         ]);

         $requestData = $request->all();


         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $image_name = time() . '.' . $file->getClientOriginalExtension();
             $file->move('images/',  $image_name);
             $requestData['image'] = $image_name;
         }

        $latestnew = Latestnew::findOrFail($id);
        $latestnew->update($requestData);
        return redirect()->route('admin.latestnew.index')->with('seccess', 'Latest New updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $latestnew = Latestnew::findOrFail($id);
        $latestnew->delete();
        return redirect()->route('admin.latestnew.index')->with('seccess', 'Latest New  deleted successfuly');
    }
}
