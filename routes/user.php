<?php
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.profile-user');
})->name('profile-user');

Route::get('library', function () {
    return view('client.library');
})->name('library');

Route::get('upload', function () {
    return view('client.upload');
})->name('upload');
