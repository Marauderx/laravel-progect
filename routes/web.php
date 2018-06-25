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

//Route::get('/gantt/{id}', function ($id) {
  //  $mainGantts = \App\Gantt::all();
    //return view('gantt', ['id' => $id], compact('mainGantts'));
//});

Route::get('/gantt/{id}', 'MainGanttsController@index');

//Route::get('/list', 'listController@index');
//Route::post('/list', 'listController@insert');

//Route::resource('/list', 'listController',['only' => ['index', 'addName']]);
Route::get('/list', 'listController@index');
Route::post('/list', 'listController@addName');
Route::delete('/gantt/{id}', 'listController@destroy');


Route::get('/layout', 'layoutController@index');

Route::get('/config/{id}', 'ConfigsController@index');
Route::post('/config/{id}', 'ConfigsController@store');


Route::get('/listschedule', 'listscheduleController@index');

Route::get('/fleet', 'FleetController@index');

Route::get('/listfleet', 'listFleetController@index');
Route::post('/listfleet', 'listfleetController@addName');
Route::delete('/fleetschedule/{id}', 'listfleetController@destroy');
Route::get('/fleetschedule/{id}', 'fleetscheduleController@index');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
