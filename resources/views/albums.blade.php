@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/albums.css') }}">
@endsection

@section('content')
<h1>Tous les albums</h1>


<ul>
    
    @foreach ($albums as $album)
    
        <li>
            <h2><a href="/albums/{{ $album->id }}">{{ $album->titre }}</a></h2>
            <p>Créé le {{ $album->creation }}</p>
        </li>
       
    @endforeach
    
</ul>

@endsection