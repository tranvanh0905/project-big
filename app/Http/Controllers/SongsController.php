<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function index()
    {
        return view('admin.songs.index');
    }

    public function add()
    {
        return view('admin.songs.add');
    }
}
