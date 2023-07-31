<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.create');
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

        Post::create($requestData);
        return redirect()->route('admin.post.index')->with('seccess', 'New created successfuly');
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
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('post'));
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

        $post = Post::findOrFail($id);
        $post->update($requestData);
        return redirect()->route('admin.post.index')->with('seccess', ' News updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.post.index')->with('seccess', ' News  deleted successfuly');
    }
}
