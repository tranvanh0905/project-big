<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        return view('admin.artists.index');
    }

    public function add()
    {
        return view('admin.artists.add');
    }
}
