<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$posts = Post::latest()->get();

return view('posts.index', ['posts' => $posts]);
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('posts.create');
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
Post::create($this->validatePost());

return redirect('/posts');
}

/**
* Display the specified resource.
*
* @param \App\Post $post
* @return \Illuminate\Http\Response
*/
public function show(Post $post)
{

return view('posts.show', ['post' => $post]);
}

/**
* Show the form for editing the specified resource.
*
* @param \App\Post $post
* @return \Illuminate\Http\Response
*/
public function edit(Post $post)
{

return view('posts.edit', compact('post'));
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Post $post
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Post $post)
{
$post->update($this->validatePost());

return redirect('/posts/' .$post->id);
}

/**
* Remove the specified resource from storage.
*
* @param \App\Post $post
* @return \Illuminate\Http\Response
*/

protected function validatePost()
{
return request()->validate([
'title' => 'required',
'slug' => 'required',
'body' => 'required'
]);
}
}
