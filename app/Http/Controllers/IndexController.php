<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('client.index', compact('songs'));
    }

    public function getSong($songId)
    {
        $modelSong = new Song();
        $song = $modelSong->find($songId);

        if ($song == null){
            return response()->json(array('msg'=> 'Khong co bai hat'), 404);
        }else{
            $data = $song;
            return response()->json($data, 200);
        }

    }
}
