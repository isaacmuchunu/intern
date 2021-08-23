<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@foreach ($posts as $post)
<h2>
<a href="/posts/{{ $post->id }}">
{{ $post->title }}
</a></h2>
<p>
{{ $post->body }}

</p>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete')}}
    {!!Form::close()!!}


@endforeach
</body>
</html>


