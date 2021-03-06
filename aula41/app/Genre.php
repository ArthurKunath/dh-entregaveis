<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genres";

    protected $fillable = ['name'];

    public function movies() {
      return $this->hasMany(Filmes::class, 'genre_id', 'id');
    }
}
