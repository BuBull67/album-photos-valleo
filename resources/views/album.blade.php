@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/album.css') }}">
@endsection

@section('content')
<a href="/albums">← Retour aux albums</a>

<h1>{{ $album->titre }}</h1>

<div class="photos">
    @forelse ($photos as $photo)
        <div class="photo">
            <img src="{{ $photo->url }}" alt="{{ $photo->titre }}">
            <h3>{{ $photo->titre }}</h3>
            <p>Note : {{ $photo->note }}</p>
        </div>
    @empty
        <p>Aucune photo dans cet album.</p>
    @endforelse
</div>
@endsection