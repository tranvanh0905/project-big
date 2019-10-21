<?php

namespace App\Http\Controllers;
class UsersController extends Controller {

	public function index() {
		return view('admin.users.index');
	}

	public function add() {
		return view('admin.users.add');
	}

	public function update() {
		return view('admin.users.edit');
	}
}
