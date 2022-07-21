<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  use HasFactory;

  public function image()
  {
    return $this->belongsTo(Images::class);
  }
  public function user()
  {
    return $this->hasOne(User::class);
  }
}
