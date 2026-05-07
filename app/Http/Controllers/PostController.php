<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        public function index() {

        $posts = Post::orderBy('id', 'asc')->get();

        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(StorePostRequest $request) {
        
        $post = Post::create($request->validated());

        return redirect()->route('posts.show', $post->id)->with('success', 'Novi post je uspješno kreiran');
    }

    public function show($id) {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id) {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(StorePostRequest $request, $id) {

        $post = Post::findOrFail($id);

        $post->update($request->validated());

        return redirect()->route('posts.show', $post->id)->with('success', 'Post je ažuriran');
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('posts.index')->with('success', "Post '{$post->title}' je obrisan");
    }
}
