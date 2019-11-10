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
Route::post('artists/add', 'ArtistsController@actionAdd')->name('artists.add');
Route::get('artists/update', 'ArtistsController@update')->name('artists.update');

//Playlist route
Route::get('playlists', 'PlaylistsController@index')->name('playlists.home');
Route::get('playlists/add', 'PlaylistsController@add')->name('playlists.add');
//Song route
Route::get('songs', 'SongsController@index')->name('songs.home');
Route::get('songs/add', 'SongsController@add')->name('songs.add');
Route::post('songs/add', 'SongsController@actionAdd');
Route::get('songs/update/{song_id}', 'SongsController@update')->name('songs.update');
Route::post('songs/update/{song_id}', 'SongsController@update')->name('songs.update');
//Kind route
Route::get('kinds', 'GenresController@index')->name('kinds.home');
Route::get('kinds/add', 'GenresController@add')->name('kinds.add');
Route::get('kinds/update/{id}', 'GenresController@update')->name('kinds.update');
Route::post('kinds/update/{id}', 'GenresController@actionUpdate')->name('kinds.update');
Route::post('kinds/add', 'GenresController@actionAdd');
//Advertises route
Route::get('advertises', 'AdvertisesController@index')->name('advertises.home');
//Comment route
Route::get('comment', 'CommentsController@index')->name('comments.home');
//Users route
Route::get('users', 'UsersController@index')->name('users.home');
Route::get('users/add', 'UsersController@add')->name('users.add');
Route::get('users/update', 'UsersController@update')->name('users.update');
//Playlist route
Route::get('playlists', 'PlaylistController@index')->name('playlists.home');
Route::get('playlists/add', 'PlaylistController@add')->name('playlists.add');
Route::get('playlists/update', 'PlaylistController@add')->name('playlists.update');
//Album route
Route::get('albums', 'AlbumsController@index')->name('albums.home');
Route::get('albums/add', 'AlbumsController@add')->name('albums.add');
Route::get('albums/update', 'AlbumsController@add')->name('albums.update');

//Ajax route
Route::get('ajax/artist_song/{artist_id}', 'AjaxController@actionGetSongArtist')->name('albums.song_artist');
