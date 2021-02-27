<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;

class Movement extends Model
{
    public function profiles()
{
    return $this->belongsToMany(Profile::class);
}
}
