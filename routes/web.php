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

Route::get('/', 'IndexController@index')->name('client.home');


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

Route::get('contact-feedback', function () {
    return view('client.contact-feedback');
})->name('contactFeedback');


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

//Get one song

Route::get('/song/{songId}', 'IndexController@getSong');




