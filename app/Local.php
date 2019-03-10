<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;

class Local extends Model
{
  public function evento() {
     return $this->hasOne('App\Event');
 }
}
