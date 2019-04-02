<?php

namespace App\Http\Controllers;

use App\Event;
use App\Local;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
    /*  $response = \Geocode::make()->latLng(44.8301522,11.6138077);
      dd($response->formattedAddress());*/

      $evento = Event::find($id);
      return view('vistaEventoSingolo', compact('evento'));
    }

    public function search(Request $request)
    {
      //dd($request);
      //recupero i dati ricevuti dal form di ricerca
      //e li passo alla validazione
     $validazioneDatiRicevuti = $request->validate([

        'localita' => 'required|min:3',
        'data' => 'required',
        'latitudine' => 'required|min:3',
        'longitudine' => 'required',

      ]);

    //  dd($validazioneDatiRicevuti);

      $localita = $validazioneDatiRicevuti["localita"];
      $data = $validazioneDatiRicevuti["data"];
      $latitudine = $validazioneDatiRicevuti["latitudine"];
      $longitudine = $validazioneDatiRicevuti["longitudine"];

      //adesso creo la query
  /*  $eventi = DB::table('events')
            ->join('locals', 'locale_id', '=', 'locals.id')
            ->select('events.id','events.nome as nomeEvento', 'events.locandina','events.organizzatore','events.descrizione','events.costo_ingresso','events.data_svolgimento',
                    'locals.nome as nomeLocale', 'locals.provincia', 'locals.citta', 'locals.indirizzo', 'locals.cap')
            ->where('data_svolgimento',$data)
            ->where('provincia',$localita)
            ->get();*/

    //  dd($localita);
    /*$eventi = Event::join('locals', 'locale_id', '=', 'locals.id')
              ->where('data_svolgimento',$data)
              ->where('latitudine',$latitudine)
              ->where('longitudine',$longitudine)
              ->get();*/
      $eventi = DB::table("events")
              ->join('locals', 'locale_id', '=', 'locals.id')
              ->select('events.id','events.nomeEvento', 'events.locandina','events.organizzatore','events.descrizione','events.costo_ingresso','events.data_svolgimento',
                      'locals.nome as nomeLocale', 'locals.provincia', 'locals.citta', 'locals.indirizzo', 'locals.cap', 'events.locandina'
                  ,DB::raw("6371 * acos(cos(radians(" . $latitudine . "))
                  * cos(radians(locals.latitudine))
                  * cos(radians(locals.longitudine) - radians(" . $longitudine . "))
                  + sin(radians(" .$latitudine. "))
                  * sin(radians(locals.latitudine))) AS distance"))
                  ->having('distance', '<', 25)
                  ->orderBy('distance')
                  ->where('data_svolgimento',$data)
                  ->get();
                //dd($eventi);
      return view('result',compact('eventi','localita'));
    }


    public function edit(Event $event)
    {
        //
    }

    public function update(Request $request, Event $event)
    {
        //
    }

    public function destroy(Event $event)
    {
        //
    }


}
