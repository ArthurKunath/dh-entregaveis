<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form() {
      return view('form');
    }

    public function adicionar(Request $request) {
      $this->validate($request, [
        'title' => 'required|string',
        'rating' => 'numeric',
        ]);

      return view('form');

    }
}
