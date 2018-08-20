<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actors;

class actorsController extends Controller
{
    public function exibirAtores() {
      $atores1 = actors::all();

      return view('actors')->with('actors', $atores1);
    }

    public function add(Request $request) {
      $this->validate($request, [
        'first_name' => 'required',
        'last_name' => 'required',
        ]);

        $atores1 = actors::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name')

        ]);

          $sucesso = $atores1->save();
          $atores1 = actors::all();


      return view('allAtores')->with('actors', $atores1);

    }


    public function adicionar1() {

        return view('editActors');


    }

}
