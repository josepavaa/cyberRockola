<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('user/login');
});

/*Route::get('/', function () {
    return view('info');
});*/

Route::resource('users', 'UserController');
Route::post('register', 'UserController@store');

Route::get('homes', function () {
    return view('home/index');
});

Route::resource('artists', 'ArtistController');

Route::resource('songs', 'SongController');
Route::get('songs/{id}/delete', 'SongController@destroy');
Route::post('songs/{id}/update', 'SongController@update');


Route::resource('rocks', 'RockController');
Route::get('rocks/{id}/send', 'RockController@send');