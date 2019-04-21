<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Local;
use App\Gender;

class Event extends Model
{
  //qui gli diciamo cosa si deve salvare il resto verrà ignorato
  protected $fillable = ['nomeEvento','organizzatore','descrizione','costo_ingresso','data_svolgimento','locale_id','locandina','slug','user_id'];

  public function locale(){

    return $this->belongsTo('App\Local');
  }

  public function generi(){

    return $this->belongsToMany('App\Genre');
  }

  public function userE() {
     return $this->hasOne('App\User');
 }

}
