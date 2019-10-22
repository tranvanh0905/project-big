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
})->name('home');


Route::get('all-albums', function () {
    return view('client.all-albums');
})->name('allAlbums');

Route::get('all-genres', function () {
    return view('client.all-genres');
})->name('allGenres');


//Single page

Route::get('single-album', function () {
    return view('client.single-album');
});

Route::get('single-artist', function () {
    return view('client.single-artist');
});

Route::get('single-playlist', function () {
    return view('client.single-playlist');
})->name('singlePlaylist');

Route::get('single-genre', function () {
    return view('client.single-genre');
})->name('singleGenre');

Route::get('single-song', function () {
    return view('client.single-song');
})->name('singleSong');


//Login and reg

Route::get('login', function () {
    return view('client.login');
})->name('login');

Route::get('reg', function () {
    return view('client.reg');
})->name('reg');

//Chart page

Route::get('top-albums', function () {
    return view('client.top-albums');
})->name('topAlbums');

Route::get('top-artists', function () {
    return view('client.top-artists');
})->name('topArtists');

Route::get('weekly-top-ten', function () {
    return view('client.weekly-top-ten');
})->name('weeklyTopTen');

//Brower page

Route::get('brower', function () {
    return view('client.brower');
})->name('brower');

Route::get('new-song-releases', function () {
    return view('client.new-song-releases');
})->name('newSongReleases');

Route::get('chart', function () {
    return view('client.chart');
})->name('chart');





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





