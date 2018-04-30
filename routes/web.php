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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::post('/users/store', 'UsersController@store')->name('users.store');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::post('/users/{id}', 'UsersController@update')->name('users.update');
Route::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rooms', 'RoomController@index')->name('rooms');
Route::get('/rooms/create', 'RoomController@create')->name('rooms.create');
Route::post('/rooms/store', 'RoomController@store')->name('rooms.store');
Route::get('/rooms/edit/{id}', 'RoomController@edit')->name('rooms.edit');
Route::post('/rooms/{id}', 'RoomController@update')->name('rooms.update');
Route::get('/rooms/destroy/{id}', 'RoomController@destroy')->name('rooms.destroy');

Route::get('/systems/edit/{id}', 'SystemsController@edit')->name('systems.edit');
Route::post('/systems/{id}', 'SystemsController@update')->name('systems.update');

Route::get('/plants', 'PlantsController@index')->name('plants.index');
Route::get('/plants/create', 'PlantsController@create')->name('plants.create');
Route::get('/plants/edit/{id}', 'PlantsController@edit')->name('plants.edit');
Route::post('/plants/store', 'PlantsController@store')->name('plants.store');
Route::post('/plants/{id}', 'PlantsController@update')->name('plants.update');
Route::get('/plants/destroy/{id}', 'PlantsController@destroy')->name('plants.destroy');

Route::get('/planttypes', 'PlantTypesController@index')->name('planttypes.index');
Route::get('/planttypes/create', 'PlantTypesController@create')->name('planttypes.create');
Route::get('/planttypes/edit/{id}', 'PlantTypesController@edit')->name('planttypes.edit');
Route::post('/planttypes/store', 'PlantTypesController@store')->name('planttypes.store');
Route::post('/planttypes/{id}', 'PlantTypesController@update')->name('planttypes.update');
Route::get('/planttypes/destroy/{id}', 'PlantTypesController@destroy')->name('planttypes.destroy');

Route::get('/notes/{entity}/{entityID}', 'NotesController@index')->name('notes.index');
Route::get('/notes/{entity}/{entityID}/create', 'NotesController@create')->name('notes.create');
Route::get('/note/edit/{id}', 'NotesController@edit')->name('notes.edit'); // needed to call this note not notes - notes causes an issue
Route::post('/notes/store', 'NotesController@store')->name('notes.store');
Route::post('/notes/{id}', 'NotesController@update')->name('notes.update');
Route::get('/note/{entity}/{entityID}/destroy/{id}', 'NotesController@destroy')->name('note.destroy');