<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
	return view('client.index');
});

//Route::get('albums', function() {
//	return view('client.albums');
//});
//Route::get('artists', function() {
//	return view('client.artists');
//});
//Route::get('genres', function() {
//	return view('client.genres');
//});
//Route::get('top-tracks', function() {
//	return view('client.top_tracks');
//});
//Route::get('free-musics', function() {
//	return view('client.free_musics');
//});
//Route::get('download', function() {
//	return view('client.download');
//});
//Route::get('purchase', function() {
//	return view('client.purchase');
//});
//Route::get('favourite', function() {
//	return view('client.favourite');
//});
//Route::get('history', function() {
//	return view('client.history');
//});
//Route::get('feature-playlist', function() {
//	return view('client.feature_playlist');
//});
//Route::get('add-playlist', function() {
//	return view('client.add_playlist');
//});
//Route::get('album-single', function() {
//	return view('client.album_single');
//});
//Route::get('artist-single', function() {
//	return view('client.artist_single');
//});
//Route::get('genre-single', function() {
//	return view('client.genre_single');
//});
//Route::get('song-single', function() {
//	return view('client.song_single');
//});





