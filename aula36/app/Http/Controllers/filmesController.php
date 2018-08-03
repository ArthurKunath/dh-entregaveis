<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class filmesController extends Controller
{
   public function procurarFilmesId($id) {
     $filme = Movie::find($id);

     $nome = $filme->title;

 return view('filme')->with('nomeDoFilme', $nome);
   }

  public function procurarFilmeNome($nome) {
    $filmes = Movie::where('title','like', '%'.$nome.'%')->get();

    return view('filmenome')->with('filmes', $filmes);
  }




}
