<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name' => 'David Villegas',
        'email' => 'david.villegas.aguilar@gmail.com',
        'password' => bcrypt('123123')
      ]);
      User::create([
        'name' => 'Aldo',
        'email' => 'aldo@gmail.com',
        'password' => bcrypt('123123')
      ]);
      factory(User::class, 50)->create();
    }
}
