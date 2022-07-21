<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $commts = [
      [
        'user' => 1,
        'image' => 4,
        'content' => 'Buena foto de familia!!',
      ],
      [
        'user' => 2,
        'image' => 1,
        'content' => 'Buena foto de PLAYA!!',
      ],
      [
        'user' => 2,
        'image' => 4,
        'content' => 'que bueno!!',
      ],
    ];
    foreach ($commts as $commt) {
      DB::table('comments')->insert([
        'user_id' => $commt['user'],
        'image_id' => $commt['image'],
        'content' => $commt['content'],
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }
  }
}
