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

Route::get('form', 'FormController@form');

Route::post('/adicionar', 'FormController@adicionar');

Route::get('/form', 'FormController@exibirFilmes');

Route::get('/filme/edit/{id}', 'FormController@editForm');
Route::put('/filme/edit/{id}', 'FormController@update');
Route::delete('/filme/edit/{id}', 'FormController@delete');


Route::get('/actors', 'actorsController@add');

Route::post('/actors/add', 'actorsController@add');
