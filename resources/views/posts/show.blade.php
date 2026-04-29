@extends('layouts.app')

@section('title', 'Detalji posta')

@section('content')

    <h1>Ovdje će biti prikazan jedan post</h1>

    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-1">Uredi post</a>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Obriši</button>
    </form>

        
@endsection
