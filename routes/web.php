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
Route::post('/categoria/inserir','categoriaController@store');
Route::post('/cliente/inserir','ClienteController@store');
Route::post('/produto/inserir','produtoController@store');

//EXCLUDE
Route::get('/categoria/exclude/{id}','categoriaController@destroy');
Route::get('/cliente/exclude/{id}','ClienteController@destroy');
Route::get('/produto/exclude/{id}','produtoController@destroy');


//VIEW
Route::get('/', function () {
    return view('index');
});
Route::get('/contato', function () {
    return view('contato');
});
