<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Uredi post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Naslov <br>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        </label><br>
        <label for="content">Sadržaj</label><br>
        <textarea name="content" id="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea><br>
        <input type="submit" value="Pošalji">
    </form>

</body>
</html>