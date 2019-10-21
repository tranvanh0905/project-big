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
Route::get('artists/update', 'ArtistsController@update')->name('artists.update');
//Playlist route
Route::get('playlists', 'PlaylistsController@index')->name('playlists.home');
Route::get('playlists/add', 'PlaylistsController@add')->name('playlists.add');
//Song route
Route::get('songs', 'SongsController@index')->name('songs.home');
Route::get('songs/add', 'SongsController@add')->name('songs.add');
Route::get('songs/update', 'SongsController@update')->name('songs.update');
//Kind route
Route::get('kinds', 'KindsController@index')->name('kinds.home');
Route::get('kinds/add', 'KindsController@add')->name('kinds.add');
Route::get('kinds/update', 'KindsController@update')->name('kinds.update');
//Advertises route
Route::get('advertises', 'AdvertisesController@index')->name('advertises.home');
//Comment route
Route::get('comment', 'CommentsController@index')->name('comments.home');
//Users route
Route::get('users', 'UsersController@index')->name('users.home');
Route::get('users/add', 'UsersController@add')->name('users.add');
Route::get('users/update', 'UsersController@update')->name('users.update');
