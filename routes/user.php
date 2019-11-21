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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'ClientController@userIndex')->name('user-profile');

    Route::get('library', 'ClientController@library')->name('user-library');

    Route::get('library/song', 'ClientController@librarySong')->name('user-library-song');

    Route::get('library/album', 'ClientController@libraryAlbum')->name('user-library-album');

    Route::get('library/playlist', 'ClientController@libraryPlaylist')->name('user-library-playlist');

    Route::get('library/artist', 'ClientController@libraryArtist')->name('user-library-artist');

    Route::get('library/user-playlist', 'ClientController@libraryUserPlaylist')->name('user-library-personal-playlist');

    Route::get('library/user-playlist/edit-playlist/{playlistId}', 'ClientController@libraryUserPlaylistEdit')->name('user-library-personal-playlist-edit');

    Route::get('library/user-playlist/add-playlist', 'ClientController@libraryUserPlaylistAdd')->name('user-library-personal-playlist-add');
    Route::post('library/user-playlist/add-playlist', 'ClientController@saveLibraryUserPlaylist')->name('user-library-personal-playlist-add');

    Route::get('/edit-account', 'ClientController@editAccount')->name('user-edit-profile');
    Route::post('/edit-account', 'ClientController@saveEditAccount')->name('user-edit-profile');

    Route::get('/upgrade-account', 'ClientController@upgrade')->name('user-upgrade-profile');

    Route::get('/change-password', 'ClientController@changePassword')->name('user-change-password');
    Route::post('/change-password', 'ClientController@saveChangePassword')->name('user-change-password');

    Route::get('/invoice', 'ClientController@userInvoice')->name('user-invoice-profile');
});

