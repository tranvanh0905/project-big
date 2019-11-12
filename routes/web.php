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

Route::get('/', 'ClientController@index')->name('client.home');


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

Route::get('/single-genre/{genresId}', 'ClientController@getGenres')->name('singleGenres');

Route::get('single-song', function () {
    return view('client.single-song');
})->name('singleSong');

Route::get('contact-feedback', function () {
    return view('client.contact-feedback');
})->name('contactFeedback');


//Login and reg

Route::get('login', 'Auth\LoginController@loginForm')->name('login');

Route::post('login', 'Auth\LoginController@postLogin');

Route::get('registration', 'Auth\RegisterController@regForm')->name('reg');

//Logout
Route::post('logout', 'Auth\LoginController@logOut')->name('logout');

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

//Play song
Route::get('/song/{songId}', 'ClientController@getSong');


Route::group(['middleware' => 'request.check'], function () {
    Route::get('/update-view/{songId}', 'ClientController@updateView');
    //+ 1 view song
    Route::post('/update-view/{songId}', 'ClientController@updateView');

});




