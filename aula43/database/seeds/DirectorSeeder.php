<?php

use Illuminate\Database\Seeder;
use App\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directors = factory(Director::class, 10)->create();
            foreach ($directors as $director) {
          factory(Movie::class, 5)->create([
            'director_id' => $director->id,
          ]);
    }
}
