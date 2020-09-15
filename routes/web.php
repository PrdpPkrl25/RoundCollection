<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/games/create', 'GameController@create')->name('games.create');
Route::post('/games', 'GameController@store')->name('games.store');
Route::get('/games/list', 'GameController@index')->name('games.list');
Route::get('/game/{game_id}', 'GameController@show')->name('game.show')->middleware('players.invite');

Route::get('/rounds/create', 'RoundController@create')->name('rounds.create');
Route::get('/rounds', 'RoundController@store')->name('rounds.store');

Route::get('/players/create', 'PlayerController@create')->name('players.create');
Route::post('/players', 'PlayerController@store')->name('players.store');

Route::get('/user/profile', 'UserController@show')->name('user.profile');

Route::get('/game/{id}', 'GameController@show')->name('code.input.page');
