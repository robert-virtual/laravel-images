<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $users = [
      [
        'name' => 'Victor',
        'surname' => 'Robles',
        'nick' => 'victorroblesweb',
        'email' => 'victor@victor.com',
      ],
      [
        'name' => 'Juan',
        'surname' => 'Lopez',
        'nick' => 'juanlopez',
        'email' => 'juan@juan.com',
      ],
      [
        'name' => 'Manolo',
        'surname' => 'Garcia',
        'nick' => 'manologarcia',
        'email' => 'manolo@manolo.com',
      ],
    ];
    foreach ($users as $user) {
      DB::table('users')->insert([
        'role' => 'user',
        'name' => $user['name'],
        'surname' => $user['surname'],
        'nick' => $user['nick'],
        'email' => $user['email'],
        'password' => Hash::make('pass'),
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }
    //
  }
}
