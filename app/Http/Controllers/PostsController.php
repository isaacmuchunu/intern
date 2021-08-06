<?php

namespace App\Http\Controllers;
use App\Post;
//use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug) {
        //$post = \DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();

        //dd($post);

        return view ('post',[
            'post' => $post
        ]);
    }
}
