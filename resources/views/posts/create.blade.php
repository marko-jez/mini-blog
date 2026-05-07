@extends('layouts.app')

@section('title', 'Novi post')

@section('content')
    

    <h1>Unesi novi post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf <div class="mb-1"> 
        <label for="">Naslov <br>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </label>
        </div>
        <div class="mb-1">
            <label for="content">Sadržaj<br>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('title') is-invalid @enderror">{{ old('content') }}</textarea>
            </label>
             @error('content')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Pošalji" class="btn btn-primary">
    </form>

    @endsection
