<?php

namespace App\Http\Controllers;

use App\Artist;
use App\PersonSong;
use App\Song;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function actionGetSongArtist($artist_id)
    {
        $song = PersonSong::where(['artist_id' => $artist_id])->get();
        return view('admin.albums.song_artist', compact(['song']));
    }

}
