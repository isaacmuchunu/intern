<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>New Article</h1>
<form method="POST" action="/posts">
@csrf
<label for="title">Title:</label><br>
<input type="text" id="title" name="title" value="{{ old('title') }}" required><br>
@error('title')
<p>{{ $errors->first('title') }}</p>
@enderror

<label for="excerpt">excerpt:</label><br>
<input type="excerpt" id="excerpt" name="excerpt" value="{{ old('excerpt') }}" required><br>
@error('excerpt')
<p>{{ $errors->first('excerpt') }}</p>
@enderror

<label for="body">Content:</label><br>
<input type="text" id="body" name="body" value="{{ old('body') }}" required><br><br>

@error('body')
<p>{{ $errors->first('body') }}</p>
@enderror
<div class="field">
    <label class="label" for="tags">Tags</label>

    <div class="control">
    <select
    name="tags[]"
    multiple
    >
         @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
         @endforeach
    </select>
         @error('tags')
               <p class="help is-danger">{{ $message  }}</p>
         @enderror
    </div>
</div>

<input type="submit" value="Submit">
</form>
</body>
</html>
