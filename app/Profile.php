<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function user()
    {
      return $this->belongsTo(User::class);

    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function profileImage()
    {
      $imagePath = ($this->image) ? $this->image: '/profile/CBOXNWHpNS28Ddaqobuo9J4XRzj5hSQf5GCCTep1.jpeg';
      return '/storage/' . $imagePath;
    }
}
