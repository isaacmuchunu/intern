@extends ('layout')

@section ('content')
<h1>Update Post</h1>
<form method="POST" action="/posts/{{ $post->id }}">
@csrf
@method('PUT')
<label for="title">Title:</label><br>
<input type="text" id="title" name="title" value="{{ $post->title }}" required><br>

<label for="slug">Slug:</label><br>
<input type="slug" id="slug" name="slug" value="{{ $post->slug }}" required><br>

<label for="body">Content:</label><br>
<input type="text" id="body" name="body" value="{{ $post->body }}" required><br><br>

<input type="submit" value="Submit">
</form>
@endsection
