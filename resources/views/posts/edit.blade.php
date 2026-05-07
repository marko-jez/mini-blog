@extends('layouts.app')

@section('title', 'Uredi post')

@section('content')



    <h1>Uredi post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">Naslov <br>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}">
            </label>
            @error('title')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="content">Sadržaj<br>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content', $post->content) }}</textarea><br>
            </label>
             @error('content')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Pošalji" class="btn btn-primary">
    </form>

    @endsection