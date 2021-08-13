<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>
        {{ $post->title }}
        </h2>
        <p>
        {{ $post->body }}
        @foreach ($post->tags as $tag)
        <p>
        <a href='/posts?tag={{$tag->name}}'>{{$tag->name}}</a>
        </p>
        @endforeach
        </p>
</body>
</html>


