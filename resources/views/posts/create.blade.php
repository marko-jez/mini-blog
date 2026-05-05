@extends('layouts.app')

@section('title', 'Novi post')

@section('content')
    

    <h1>Unesi novi post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf <div class="mb-1"> 
        <label for="">Naslov <br>
            <input type="text" name="title" id="title" value="" class="form-control" value="{{ old('title') }}">
            @error('title')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </label>
        </div><br>
        <div class="mb-1">
            <label for="content">Sadržaj<br>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </label>
        </div><br>
        <input type="submit" value="Pošalji" class="btn btn-primary">
    </form>

    @endsection
