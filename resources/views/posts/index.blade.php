@extends('layouts.app')

@section('title', 'Svi postovi')

@section('content')

    @if (session('success'))
        <div class="alert alert-success d-inline-block">
            {{ session('success') }}
        </div>
    @endif

    <h1>Svi postovi</h1>

    @forelse ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.show', $post->id) }}">Detalji</a>
        <a href="{{ route('posts.edit', $post->id) }}">Uredi</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="#">Obriši</button>
        </form>
        <hr>
    @empty
        <p>Nema postova u bazi</p>
    @endforelse

    
@endsection