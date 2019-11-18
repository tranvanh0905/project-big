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

Route::get('/', 'AdminController@index')->middleware('checkAdminLogin')->name('admin.home');
Route::get('/login', 'AdminController@login')->name('admin.login');
Route::post('/login', 'AdminController@actionLogin')->name('admin.login');

//Countries route
Route::get('countries', 'CountriesController@index')->name('countries.home');
Route::get('countries/add', 'CountriesController@add')->name('countries.add');
//Album route
Route::get('albums', 'AlbumsController@index')->name('albums.home');
Route::get('albums/add', 'AlbumsController@add')->name('albums.add');
Route::post('albums/add', 'AlbumsController@actionAdd')->name('albums.add');
Route::get('albums/update/{id}', 'AlbumsController@update')->name('albums.update');
Route::post('albums/update/{id}', 'AlbumsController@actionUpdate')->name('albums.update');
Route::get('albums/delete/{id}', 'AlbumsController@actionDelete')->name('albums.delete');
//Artist route
Route::get('artists', 'ArtistsController@index')->name('artists.home');
Route::get('artists/add', 'ArtistsController@add')->name('artists.add');
Route::post('artists/add', 'ArtistsController@actionAdd')->name('artists.add');
Route::get('artists/update/{id}', 'ArtistsController@update')->name('artists.update');
Route::post('artists/update/{id}', 'ArtistsController@actionUpdate')->name('artists.update');
Route::get('artist/delete/{id}', 'ArtistsController@actionDelete')->name('artists.delete');

//Playlist route
Route::get('playlist', 'PlaylistController@index')->name('playlist.home');
Route::get('playlist/add', 'PlaylistController@add')->name('playlist.add');
Route::post('playlist/add', 'PlaylistController@actionAdd')->name('playlist.add');
Route::get('playlist/update/{playlist_id}', 'PlaylistController@update')->name('playlist.update');
Route::post('playlist/update/{playlist_id}', 'PlaylistController@actionUpdate')->name('playlist.update');
Route::get('playlist/delete/{playlist_id}', 'PLaylistController@actionDelete')->name('playlist.delete');
//Song route
Route::get('songs', 'SongsController@index')->name('songs.home');
Route::get('songs/add', 'SongsController@add')->name('songs.add');
Route::post('songs/add', 'SongsController@actionAdd');
Route::get('songs/update/{song_id}', 'SongsController@update')->name('songs.update');
Route::post('songs/update/{song_id}', 'SongsController@actionUpdate')->name('songs.update');
Route::get('songs/delete/{song_id}', 'SongsController@actionDelete')->name('songs.delete');
//Kind route
Route::get('kinds', 'GenresController@index')->name('kinds.home');
Route::get('kinds/add', 'GenresController@add')->name('kinds.add');
Route::get('kinds/update/{id}', 'GenresController@update')->name('kinds.update');
Route::post('kinds/update/{id}', 'GenresController@actionUpdate')->name('kinds.update');
Route::post('kinds/add', 'GenresController@actionAdd');
Route::get('kind/delete/{id}', 'GenresController@actionDelete')->name('kinds.delete');
//Advertises route
Route::get('advertises', 'AdvertisesController@index')->name('advertises.home');
//Comment route
Route::get('comment', 'CommentsController@index')->name('comments.home');
//Users route
Route::get('users', 'UsersController@index')->name('users.home');
Route::get('users/add', 'UsersController@add')->name('users.add');
Route::get('users/update', 'UsersController@update')->name('users.update');

//Ajax route
Route::get('ajax/artist_song/{artist_id}', 'AjaxController@actionGetSongArtist')->name('albums.song_artist');
