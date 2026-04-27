@extends('layouts.app')

@section('title', 'Svi postovi')

@section('content')



    <h1>Ovdje će biti prikazani svi postovi</h1>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.show', $post->id) }}">Detalji</a>
        <a href="{{ route('posts.edit', $post->id) }}">Uredi</a>
        <hr>
    @endforeach

    
@endsection