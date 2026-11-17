<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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

=======
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    //
}
>>>>>>> 20707bb1e0c04c23c806e4dd527fbc5a2a3b7189
