<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jedan post</title>
</head>
<body>
    <h1>Ovdje će biti prikazan jedan post</h1>

    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post->id) }}">Uredi post</a>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Obriši</button>
    </form>

</body>
</html>