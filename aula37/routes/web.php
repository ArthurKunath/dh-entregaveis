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

Route::get('/ola/{name}', function ($name) {
    return "Olá " . $name;
});

Route::get('/meuPrimeiroCaminho/{nome}', function ($nome) {
    if ($nome == "arthur"){
       return "Criei meu primeiro caminho em Laravel";
     } else {
       return redirect('/');
     }
});

Route::get('/resultado/{numero}/{opcional?}', function ($numero, $opcional = null) {
    if ($opcional == null) {
      if ($numero % 2 === 0) {
        return 'É par';
      } else {
        return "<h1>É ímpar</h1>";
      }
    } else {
    return  $numero * $opcional;

    }
});

Route::get('/filmes/{id}', 'FilmesController@procurarFilmesId');

Route::get('/filmes/procurar/{nome}', 'FilmesController@procurarFilmeNome');

Route::get('atores', 'AtorController@directory');

Route::get('ator/{id}', 'AtorController@show');
