<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actorsController extends Controller
{
    public function actors() {
      return view('actors');
    }

    public function add(Request $request) {
      $this->validate($request, [
        'last_name' => 'required',
        'rating' => 'numeric',
        ]);


      return view('actors')->with('request', $request);

    }
}
