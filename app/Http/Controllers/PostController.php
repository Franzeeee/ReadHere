<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::paginate(9);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostFormRequest $request)
    {
        $validated =  $request->validated();

        $post = Post::create($validated);

        return redirect()
            ->route('blog.show', $post->id)
            ->with('success', "Form Successfuly Submitted.");
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostFormRequest $request, $id)
    {
        $validated = $request->validated();
        $post = Post::find($id);

        $post->update($validated);

        return redirect()
            ->route('blog.show', $post)
            ->with('success', "Blog udpated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()
            ->route('blog.index')
            ->with('success', "Deleted Successfully!");
    }
}
