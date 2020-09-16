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
Route::get('/game/{game_id}', 'GameController@show')->name('game.show')->middleware('participants.invite');

Route::get('/participants/{game_id}/invite', 'ParticipantController@create')->name('participants.invite');
Route::post('/participants/{game_id}', 'ParticipantController@store')->name('participants.store');

Route::get('/rounds/add', 'RoundController@create')->name('rounds.add');
Route::post('/rounds', 'RoundController@store')->name('rounds.store');

Route::get('/user/profile', 'UserController@show')->name('user.profile');

Route::get('/game/{id}', 'GameController@show')->name('code.input.page');
