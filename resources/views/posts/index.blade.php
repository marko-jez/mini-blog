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
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Detalji</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Uredi</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Jeste li sigurni?')">Obriši</button>
        </form>
        <hr>
    @empty
        <p>Nema postova u bazi</p>
    @endforelse

    
@endsection