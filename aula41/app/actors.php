  <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actors extends Model
{
  protected $table = "actors";

  protected $fillable = ['last_name', 'first_name'];
}
