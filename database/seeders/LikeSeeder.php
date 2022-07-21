<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    $likes = [
      [
        'user' => 1,
        'image' =>4 ,
      ],
      [
        'user' => 2,
        'image' =>4 ,
      ],
      [
        'user' => 3,
        'image' => 1,
      ],
      [
        'user' => 3,
        'image' => 2,
      ],
      [
        'user' => 2,
        'image' => 1,
      ],
    ];
    foreach ($likes as $like) {
      DB::table('likes')->insert([
        'user_id' => $like['user'],
        'image_id' => $like['image'],
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }
    }
}
