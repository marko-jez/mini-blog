@extends('layouts.app')

@section('title', 'Home')

@section('content')


    <h1>Bokić svima</h1>
    <h2>Dobrodošli na mini blog o kojem možete pisati baš svašta</h2>

    <div>
        <h3>Slobodno se prebacite na listu svih blogova</h3>
        <a href="{{ route('posts.index') }}">Svi postovi</a>
        <a href="{{ route('posts.create') }}">Novi post</a>
    </div>

@endsection


