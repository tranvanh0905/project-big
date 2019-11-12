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

    Route::get('upload', 'ClientController@upload')->name('user-upload');

    Route::get('/edit-account', 'ClientController@editAccount')->name('user-edit-profile');
    Route::post('/edit-account', 'ClientController@saveEditAccount')->name('user-edit-profile');

    Route::get('/upgrade-account', 'ClientController@upgrade')->name('user-upgrade-profile');

    Route::get('/change-password', 'ClientController@changePassword')->name('user-change-password');
    Route::post('/change-password', 'ClientController@saveChangePassword')->name('user-change-password');

    Route::get('/invoice', 'ClientController@userInvoice')->name('user-invoice-profile');
});

