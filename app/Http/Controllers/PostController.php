<?php

namespace App\Http\Controllers;

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

    public function store(Request $request) {
        $credentials = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        /* $post = new Post();
        $post->title = $credentials['title'];
        $post->content = $credentials['content'];
        $post->save(); */

        $post = Post::create($credentials);

        return redirect()->route('posts.show', $post->id);
    }

    public function show($id) {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id) {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $credentials = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::findOrFail($id);

        $post->update($credentials);

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
