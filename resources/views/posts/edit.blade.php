@extends('layouts.app')

@section('title', 'Uredi post')

@section('content')



    <h1>Uredi post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Naslov <br>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
        </label><br>

        <label for="content">Sadržaj<br>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content', $post->content) }}</textarea><br>
        </label><br>
        <input type="submit" value="Pošalji" class="btn btn-primary">
    </form>

    @endsection