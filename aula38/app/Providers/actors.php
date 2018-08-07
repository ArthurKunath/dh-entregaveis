<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actors extends Model
{
  protected $atores = "actors";

  protected $fillable = ['last_name', 'rating'];
}
