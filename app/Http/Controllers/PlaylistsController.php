<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function index()
    {
        return view('admin.playlists.index');
    }

    public function add()
    {
        return view('admin.playlists.add');
    }
}
