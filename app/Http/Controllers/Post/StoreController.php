<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $data = $request->validated();

        $tags = $data['tags'];
        unset($data['tags']);

        Post::firstOrCreate($data);

        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }

}
