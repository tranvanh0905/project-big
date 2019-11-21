<?php

namespace App\Http\Controllers;
use App\User;

class UsersController extends Controller {

	public function index() {
	    $users = User::paginate(20);
		return view('admin.users.index', compact('users'));
	}

	public function add() {
		return view('admin.users.add');
	}

	public function update() {
		return view('admin.users.edit');
	}
}
