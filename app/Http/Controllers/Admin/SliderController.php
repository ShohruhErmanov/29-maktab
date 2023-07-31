<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
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

        Slider::create($requestData);
        return redirect()->route('admin.slider.index')->with('seccess', 'Slider created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
         ]);

         $requestData = $request->all();


         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $image_name = time() . '.' . $file->getClientOriginalExtension();
             $file->move('images/',  $image_name);
             $requestData['image'] = $image_name;
         }

        $slider = Slider::findOrFail($id);
        $slider->update($requestData);
        return redirect()->route('admin.slider.index')->with('seccess', 'Slider updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->route('admin.slider.index')->with('seccess', 'Slider deleted successfuly');
    }
}
