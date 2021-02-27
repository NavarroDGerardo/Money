<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movement;

class Profile extends Model
{
    public function movements()
{
    return $this->belongsToMany(Movement::class);
}
}
