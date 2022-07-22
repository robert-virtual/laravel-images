<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
  use HasFactory;

  public function comments()
  {
    return $this->hasMany(Comment::class,'image_id');
  }

  public function likes()
  {
    return $this->hasMany(Like::class,'image_id');
  }
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
