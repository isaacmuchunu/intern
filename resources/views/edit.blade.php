<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Update Post</h1>
<form method="POST" action="/posts/{{ $post->id }}">
@csrf
@method('PUT')
<label for="title">Title:</label><br>
<input type="text" id="title" name="title" value="{{ $post->title }}" required><br>

<label for="excerpt">excerpt:</label><br>
<input type="excerpt" id="excerpt" name="excerpt" value="{{ $post->excerpt }}" required><br>

<label for="body">Content:</label><br>
<input type="text" id="body" name="body" value="{{ $post->body }}" required><br><br>

<input type="submit" value="Submit">
</form>


</body>
</html>
