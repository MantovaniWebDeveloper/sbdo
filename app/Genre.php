<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;

class Genre extends Model
{
  public function events(){

    return $this->belongsToMany('App\Event');
  }
}
