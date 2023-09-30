<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
//        $tag = Tag::find(1);
//        dd($tag->posts);
         return view('post.index', compact('posts'));

    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => '',
            'category_id' => '',
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
        $categories = Category::all();
        return view('post.edit', compact('post','categories'));
    }


    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => '',
            'category_id' => '',
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
