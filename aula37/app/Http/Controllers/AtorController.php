<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class AtorController extends Controller
{
  public function directory() {
    $atores = Actor::orderby('first_name')->get();
    return view('atores')->with('atores', $atores);

}

    public function show($id) {
      $ator = Actor::find($id)->get();
      return view('ator')->with('ator', $ator);




  }
}
