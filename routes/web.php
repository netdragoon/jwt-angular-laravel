<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('agenda', ['as' => 'agenda.index', 'uses' => 'AgendaController@index']);

Route::get('/empresafuncao', "EmpresaFuncaoController@index");
Route::post('/empresafuncao', "EmpresaFuncaoController@index");

Route::post('/empresafuncao/store', "EmpresaFuncaoController@store");

Route::get('login', function()
{
    $user = new \App\Models\User();

    $find = $user->where('email', 'dias.fulvio@gmail.com')->first();

    if ($find)
    {
        \Auth::guard()->login($find);
    }

    var_dump(\Auth::guard()->user());
    return "<a href='/agenda'>Agenda</a>";
});

Route::post('logout', function(Request $request)
{
    \Auth::guard()->logout();
    $request->user = null;
    $request->session()->flush();
    $request->session()->regenerate();
    var_dump(\Auth::user());
    return "<a href='/agenda'>Agenda</a>";
});

//Auth::routes();

Route::get('/home', 'HomeController@index');


Route::post('/carrinho/atualiza', [
    'uses' => 'CartController@atualizaQtd',
    'as' => 'carrinho.atualiza'
]);


Route::get('pictures', ['as' => 'pictures.index', 'uses'=>'SavePictureController@index']);
Route::post('pictures/store', ['as' => 'pictures.store', 'uses'=>'SavePictureController@store']);