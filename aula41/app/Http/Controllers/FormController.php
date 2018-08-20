<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filmes;

class FormController extends Controller
{
    public function delete ($id) {
      $filme = Filmes::find($id);

      $filme->delete();

      return 'Filme deletado com sucesso!';
    }

    public function form() {
      return view('form');
    }

    public function exibirFilmes() {
      $filmes = Filmes::paginate(5);

      return view('todosFilmes')->with('filmes', $filmes);
    }


    public function editForm($id) {
      $filme = Filmes::find($id);

      return view('editForm')->with('filme', $filme);
    }

    public function update(Request $request, $id) {

      $filme = Filmes::find($id);

      $filme->title = $request->input('title');
      $filme->rating = $request->input('rating');
      $filme->awards = $request->input('awards');
      $filme->length = $request->input('length');

      $sucesso = $filme->save();

      $todosfilmes = Filmes::all();

      if ($sucesso) {
        return view('todosFilmes')
                ->with('edicaosucesso', true)
                ->with('filmes', $todosfilmes);
      } else {
        return view('todosFilmes')
              ->with('ocorreuErro', true)
              ->with('filmes', $todosfilmes);
      }
     }



    public function adicionar(Request $request) {
      $this->validate($request, [
        'title' => 'required|string',
        'rating' => 'numeric|min:0|max:10',
        'awards' => 'numeric|min:0',
        'genres' => 'required',
        'length' => 'numeric|min:0'
        ]);

        $filmes = Filmes::create([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('awards'),
            'length' => $request->input('length'),
            'genres' => $request->input('genres'),
            'release_date' => '2000-11-10'
        ]);



        $sucesso = $filmes->save();

        if ($sucesso) {
          return view('form')->with('sucesso', true);
        } else {
          return view('form')->with('ocorreuErro', true);
        }

      return view('form');

    }
}
