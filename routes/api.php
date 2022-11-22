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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categoria','categoriaController@categoria');

Route::get('/categoria/{id}','App\Http\Controllers\categoriaController@categoriaById');

Route::post('/categoria','App\Http\Controllers\categoriaController@categoriaSalvar');

Route::delete('/categoria/{id}','App\Http\Controllers\categoriaController@deleteCategoriaById');