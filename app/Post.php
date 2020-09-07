<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $gaurded = [];
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
