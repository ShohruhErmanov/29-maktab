<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'acceptance' => 'required',
            'contact' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'telegram' => 'required',
            'youtube' => 'required',
         ]);


        Contact::create($request->all());
        return redirect()->route('admin.contact.index')->with('seccess', 'Contact created saccessfuly');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'acceptance' => 'required',
            'contact' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'telegram' => 'required',
            'youtube' => 'required',
         ]);

         $contact = Contact::findOrFail($id);
         $contact->update($request->all());
         return redirect()->route('admin.contact.index')->with('seccess', 'Contact updated saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('seccess', 'Contact deleted saccessfuly');
    }

}

