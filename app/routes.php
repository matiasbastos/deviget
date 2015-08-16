<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::any('/', 'ConnectFourController@new_game');
Route::get('/games/{player}', 'ConnectFourController@board')->where('player', '[1-2]');
Route::get('/add_disc/{player}/{row}', 'ConnectFourController@add_disc')->where(['player'=>'[1-2]', 'row'=>'[1-7]']);
