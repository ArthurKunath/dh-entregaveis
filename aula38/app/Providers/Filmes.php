<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
  protected $filmes = "movies";

  protected $fillable = ['title', 'rating'];
}
