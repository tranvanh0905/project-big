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

Route::get('genres','ClientController@genres')->name('client.genres');


//Single page

Route::get('single-album/{albumId}', 'ClientController@singleAlbum')->name('singleAlbum');

Route::get('single-artist', function () {
    return view('client.single-artist');
});

Route::get('single-playlist', function () {
    return view('client.single-playlist');
})->name('singlePlaylist');

Route::get('single-genre/{genresId}', 'ClientController@singleGenres')->name('singleGenres');

Route::get('single-song/{songId}', 'ClientController@singleSong')->name('singleSong');

Route::get('contact-feedback', function () {
    return view('client.contact-feedback');
})->name('contactFeedback');


//Login and reg

Route::get('login', 'Auth\LoginController@loginForm')->name('login');

Route::post('login', 'Auth\LoginController@postLogin');

Route::get('registration', 'Auth\RegisterController@regForm')->name('reg');

//Logout
Route::get('logout', 'Auth\LoginController@logOut')->name('logout');

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

Route::get('brower', 'ClientController@brower')->name('client.brower');

//Route::get('new-song-releases', 'ClientController')->name('newSongReleases');

//Chart  page
Route::get('chart', 'ClientController@chart')->name('client.chart');

//Chart song page
Route::get('chart/song', 'ClientController@chartSong')->name('client.chart-song');

//Chart album page
Route::get('chart/album', 'ClientController@chartAlbum')->name('client.chart-album');

//Play song
Route::get('/song/{songId}', 'ClientController@getSong');

//Play album
Route::get('/album/{albumId}', 'ClientController@getSongOfAlbum');

//Play playlist
Route::get('/playlist/{playlistId}', 'ClientController@getSongOfPlaylist');


Route::group(['middleware' => 'request.check'], function () {
    Route::get('/update-view/{songId}', 'ClientController@updateView');
    //+ 1 view song
    Route::post('/update-view/{songId}', 'ClientController@updateView');

});




