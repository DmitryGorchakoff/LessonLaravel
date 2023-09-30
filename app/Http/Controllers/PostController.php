<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->find(1);
        $category = Category::find(1);
        dd($posts->tags);
        // return view('post.index', compact('posts'));

    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => '',
        ]);
        Post::firstOrCreate($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }


    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => '',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);


    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }

}
