<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Comment::create([
        'description' => 'Mi primera Comentario',
        'user_id' => '1',
        'publication_id' => '1'
      ]);

      Comment::create([
        'description' => 'Mi segundo comentario',
        'user_id' => '2',
        'publication_id' => '1'
      ]);
      Comment::create([
        'description' => 'Mi primer comentario para el otro comentario',
        'user_id' => '2',
        'publication_id' => '1'
      ]);
    }
}
