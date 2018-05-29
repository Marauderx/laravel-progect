<?php

use Illuminate\Http\Request;

Route::get('/data/{id}', 'GanttController@get');
Route::resource('/gantt/{id}/task', 'TaskController');
Route::resource('/gantt/{id}/link', 'LinkController');
Route::resource('/gantt/{id}/gantt', 'MainGanttsController');
Route::post('/list', 'listController@addName');
Route::delete('/gantt/{id}', 'listController@destroy');



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
