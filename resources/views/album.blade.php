@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/album.css') }}">
@endsection

@section('content')
<a href="/albums">← Retour aux albums</a>

<h1>{{ $album->titre }}</h1>
<div class="modal-backdrop">
<div class ="largephoto">
    <img src="https://img.hardloop.com/image/upload/v1609858588/articles/id-645-comment-choisir-ses-raquettes-a-neige/randonnee-en-raquettes.jpg" alt="">
</div>
</div>

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

<script>
    let modal = document.querySelector('modal-backdrop');
    let modalimg = document.querySelector('img');

    document.querySelectorAll('img', 'modalimg')
</script>
@endsection