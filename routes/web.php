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

//MODEL
Route::get('/cliente','ClienteController@index');
Route::get('/categoria','categoriaController@index');
Route::get('/pedido','pedidoController@index');
Route::get('/produto','produtoController@index');

//INSERT
Route::post('/contato/inserir','categoriaController@store');

//VIEW
Route::get('/', function () {
    return view('index');
});
Route::get('/contato', function () {
    return view('contato');
});
