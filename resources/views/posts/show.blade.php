@extends('layouts.app')

@section('title', 'Detalji posta')

@section('content')

    @if (session('success'))
        <div class="alert alert-success d-inline-block">
            {{ session('success') }}
        </div>
    @endif

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-1">Uredi post</a>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Obriši</button>
    </form>

        
@endsection
