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
      $evento = Event::find($id);
      return view('vistaEventoSingolo', compact('evento'));
    }

    public function search(Request $request)
    {
      //recupero i dati ricevuti dal form di ricerca
      //e li passo alla validazione
      $validazioneDatiRicevuti = $request->validate([

        'localita' => 'required|min:3',
        'data' => 'required',

      ]);

      //dd($validazioneDatiRicevuti);

      $localita = $validazioneDatiRicevuti["localita"];
      $data = $validazioneDatiRicevuti["data"];

      //adesso creo la query
    $eventi = DB::table('events')
            ->join('locals', 'locale_id', '=', 'locals.id')
            ->select('events.id','events.nome as nomeEvento', 'events.locandina','events.organizzatore','events.descrizione','events.costo_ingresso','events.data_svolgimento',
                    'locals.nome as nomeLocale', 'locals.provincia', 'locals.citta', 'locals.indirizzo', 'locals.cap')
            ->where('data_svolgimento',$data)
            ->where('provincia',$localita)
            ->get();

    //  dd($localita);

      return view('result',compact('eventi'));
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
