<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CittaController extends Controller
{
    public function index(){
      $citta = \Config::get('cities');
      return $citta;
    }
}
