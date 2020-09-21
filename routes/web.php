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
Route::get('/games/create/add-numbers', 'GameController@addNumbers')->name('games.numbers.add');
Route::post('/games/add-numbers', 'GameController@postAddNumbers')->name('games.numbers.post');
Route::get('/games/create/add-days', 'GameController@addDays')->name('games.days.add');
Route::post('/games/add-days', 'GameController@postAddDays')->name('games.days.post');
Route::get('/games/create/add-datetime', 'GameController@addDateTime')->name('games.datetime.add');
Route::post('/games/create', 'GameController@store')->name('games.store');
Route::get('/games/list', 'GameController@index')->name('games.list');
Route::get('/games/{game}', 'GameController@show')->name('games.show')->middleware('participants.invite');
Route::get('/games/{game}/rounds', 'GameController@allRounds')->name('games.show.rounds');
Route::get('/games/{game}/details', 'GameController@info')->name('games.show.details');



Route::get('/participants/{game}/invite', 'ParticipantController@create')->name('participants.invite');
Route::post('/participants/{game}', 'ParticipantController@store')->name('participants.store');

Route::get('/rounds/{round_id}/edit', 'RoundController@edit')->name('rounds.edit');
Route::post('/rounds/', 'RoundController@update')->name('rounds.update');

Route::get('/quotation/{round}/add','QuotationController@create')->name('quotations.create');
Route::post('/quotations/{round}','QuotationController@post')->name('quotations.post');

Route::get('/user/profile', 'UserController@show')->name('user.profile');

