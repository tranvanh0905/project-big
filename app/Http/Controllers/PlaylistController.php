<?php

namespace App\Http\Controllers;
class PlaylistController extends Controller {

	public function index() {
		return view('admin.playlists.index');
	}

	public function add() {
		return view('admin.playlists.add');
	}

	public function update() {
		return view('admin.playlists.edit');
	}
}
