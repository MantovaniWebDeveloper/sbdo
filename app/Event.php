<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Local;
use App\Gender;

class Event extends Model
{
  public function locale(){

    return $this->belongsTo('App\Local');
  }

  public function generi(){

    return $this->belongsToMany('App\Genre');
  }

}
