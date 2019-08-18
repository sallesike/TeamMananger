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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	
	Route::resource('teams', 'TeamController');
	Route::resource('players', 'PlayerController');
	//Route::get('player_team', );
	/*Route::get('/teams', 'TeamController@index')->name('teams.index');
	Route::get('/teams/create', 'TeamController@create')->name('team.create');
	Route::post('/teams/store', 'TeamController@store')->name('teams.store');
	Route::get('/teams/edit/{id}', 'TeamController@edit')->name('teams.edit');
	Route::put('/teams/update/{id}', 'TeamController@update')->name('teams.update');
	*/
});	
