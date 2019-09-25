<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\ArtistsController;

Route::get('/', 'AdminController@index')->name('admin.home');


//Countries route

Route::get('countries', 'CountriesController@index')->name('countries.home');
Route::get('countries/add', 'CountriesController@add')->name('countries.add');

//Album route

Route::get('albums', 'AlbumsController@index')->name('albums.home');
Route::get('albums/add', 'AlbumsController@add')->name('albums.add');

//Artist route

Route::get('artists', 'ArtistsController@index')->name('artists.home');
Route::get('artists/add', 'ArtistsController@add')->name('artists.add');

//Playlist route

Route::get('playlists', 'PlaylistsController@index')->name('playlists.home');
Route::get('playlists/add', 'PlaylistsController@add')->name('playlists.add');

//Song route

Route::get('songs', 'SongsController@index')->name('songs.home');
Route::get('songs/add', 'SongsController@add')->name('songs.add');


