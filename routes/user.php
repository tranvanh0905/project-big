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
    return view('client.account');
})->name('profile-user');

Route::get('library', function () {
    return view('client.library');
})->name('user-library');

Route::get('upload', function () {
    return view('client.upload');
})->name('upload');

Route::get('/edit-account', function () {
    return view('client.edit-account');
})->name('edit-profile-user');

Route::get('/upgrade-account', function () {
    return view('client.upgrade-account');
})->name('upgrade-profile-user');

Route::get('/change-password', function () {
    return view('client.change-password');
})->name('change-password-profile-user');

Route::get('/invoice', function () {
    return view('client.invoice');
})->name('invoice-profile-user');

