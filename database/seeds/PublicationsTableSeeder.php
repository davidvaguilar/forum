<?php

use Illuminate\Database\Seeder;
use App\Publication;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Publication::create([
        'description' => 'Mi primera publicacion',
        'user_id' => '2'
      ]);

      Publication::create([
        'description' => 'Mi segunda publicacion',
        'user_id' => '2'
      ]);
    }
}
