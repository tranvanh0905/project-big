<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        return view('admin.albums.index');
    }

    public function add()
    {
        return view('admin.albums.add');
    }
}
