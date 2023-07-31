<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Footer;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::all();
        return view('admin.footer.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'faks' => 'required',
            'map' => 'required',
         ]);

         Footer::create($request->all());
         return redirect()->route('admin.footer.index')->with('seccess', 'Footer created saccessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $footer = Footer::findOrFail($id);
        return view('admin.footer.show', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $footer = Footer::findOrFail($id);
        return view('admin.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'faks' => 'required',
            'map' => 'required',
         ]);
        $footer = Footer::findOrFail($id);
        $footer->update($request->all());
        return redirect()->route('admin.footer.index')->with('seccess', 'Footer updated saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();
        return redirect()->route('admin.footer.index')->with('seccess', 'Footer deleted saccessfuly');
}
}
