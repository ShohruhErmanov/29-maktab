<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/',  $image_name);
            $requestData['image'] = $image_name;
        }

        Image::create($requestData);
        return redirect()->route('admin.image.index')->with('seccess', 'Image created successfuly');
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
        $image = Image::findOrFail($id);
        return view('admin.image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->all();


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/',  $image_name);
            $requestData['image'] = $image_name;
        }

       $image = Image::findOrFail($id);
       $image->update($requestData);
       return redirect()->route('admin.image.index')->with('seccess', 'Image updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        return redirect()->route('admin.image.index')->with('seccess', 'Image deleted successfuly');
    }
}
