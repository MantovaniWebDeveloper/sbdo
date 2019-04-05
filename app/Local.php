<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;

class Local extends Model
{

  //qui gli diciamo cosa si deve salvare il resto verrà ignorato
  protected $fillable = ['nome','citta','provincia','indirizzo','cap','latitudine','longitudine'];

  public function evento() {
     return $this->hasOne('App\Event');
 }
}
