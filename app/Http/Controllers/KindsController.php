<?php

namespace App\Http\Controllers;
class KindsController extends Controller {

	public function index() {
		return view('admin.kinds.index');
	}

	public function add() {
		return view('admin.kinds.add');
	}

	public function update() {
		return view('admin.kinds.edit');
	}
}
