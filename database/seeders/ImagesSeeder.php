<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $images = [
      [
        'user' => 1,
        'image' => 'test.jpg',
        'desc' => 'descripción de prueba 1'
      ],
      [
        'user' => 1,
        'image' => 'playa.jpg',
        'desc' => 'descripción de prueba 2'
      ],
      [
        'user' => 1,
        'image' => 'arena.jpg',
        'desc' => 'descripción de prueba 3'
      ],
      [
        'user' => 3,
        'image' => 'familia.jpg',
        'desc' => 'descripción de prueba 4'
      ],
    ];
    foreach ($images as $image) {
      DB::table('images')->insert([
        'user_id' => $image['user'],
        'image_path' => $image['image'],
        'description' => $image['desc'],
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }
  }
}
