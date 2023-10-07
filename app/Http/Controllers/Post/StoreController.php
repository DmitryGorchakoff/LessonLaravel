<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => '',
            'category_id' => '',
            'tags' => '',
        ]);
//        $tags = $data['tags'];
//        unset($data['tags']);
        Post::firstOrCreate($data);
       /* $post->tags()->attach($tags);*/
        return redirect()->route('post.index');
    }

}
