<?php

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teamCreate', 'TeamController@index')->middleware('auth');

Route::get('/playerCreate', 'PlayerController@index');

Route::get('/matchCreate', 'MatchController@index');

Route::get('/match', 'MatchController@show');

Route::get('/match/stats', 'MatchController@showStats');

Route::post('/teamCreation', 'TeamController@create');

Route::post('/playerCreation', 'PlayerController@create');

Route::post('/matchCreation', 'MatchController@create');

Route::get('/teams', 'TeamController@show');

Route::get('/teams/stats', 'TeamController@showStats');

Route::get('/players', 'PlayerController@show');

Route::get('/languages/fr', 'LanguageController@french');

Route::get('/languages/en', 'LanguageController@english');