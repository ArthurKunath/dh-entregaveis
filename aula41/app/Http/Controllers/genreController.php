<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class genreController extends Controller
{
    public function exibirGeneros() {
      $genres = Genre::all();

      return view('genres')->with('genres', $genres);
    }


    public function show($id) {
      $genre = Genre::find($id);

      return view('genresid')->with('genre', $genre);
    }

    public function editGenre($id) {
      $genre = Genre::find($id);

      return view('editGenre')->with('genres', $genre);
    }



}
