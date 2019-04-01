<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Event;
use App\Locals;
use App\Genre;

class HomeController extends Controller
{

    public function index()
    {
      Carbon::setLocale(app()->getLocale());
      $dataOdierna = Carbon::now('Europe/Rome')->toDateString();

      //dd($dataOdierna);

      $eventi = Event::where('data_svolgimento',$dataOdierna)->orderBy('data_svolgimento', 'desc')->get();
    //dd($eventi);
      $generi = Genre::all();


      return view('frontpage', compact('eventi','dataOdierna','generi'));
    }


}
