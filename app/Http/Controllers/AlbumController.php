<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('albums', ['albums' => $albums]);
    }
    public function show($id)
{
    $album = Album::findOrFail($id);
    $photos = Photo::where('album_id', $id)->get();
    return view('album', ['album' => $album, 'photos' => $photos]);
}
}

