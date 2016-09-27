<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get('/creditos', ['as' => 'creditos.index','uses' => 'CreditosController@index']);
Route::get('/creditos/{id}', ['as' => 'creditos.show','uses' => 'CreditosController@show']);
Route::post('/creditos', ['as' => 'creditos.store','uses' => 'CreditosController@store']);
Route::put('/creditos/{id}', ['as' => 'creditos.update','uses' => 'CreditosController@update']);
Route::delete('/creditos/{id}', ['as' => 'creditos.destroy','uses' => 'CreditosController@destroy']);

Route::post('/login', ['as' => 'auth.login','uses'=>'AuthController@login']);