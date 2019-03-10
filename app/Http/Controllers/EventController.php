<?php

namespace App\Http\Controllers;

use App\Event;
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

    public function show(Request $request)
    {

    }

    public function search(Request $request)
    {
      //recupero i dati ricevuti dal form di ricerca
      //e li passo alla validazione
      $validazioneDatiRicevuti = $request->validate([

        'localita' => 'required|min:3',
        'genere' => 'required',
        'data' => 'required',

      ]);

      //dd($validazioneDatiRicevuti);

      $localita = $validazioneDatiRicevuti["localita"];
      $genere = $validazioneDatiRicevuti["genere"];
      $data = $validazioneDatiRicevuti["data"];

      //adesso creo la query
      $eventi = DB::table('events')
            ->join('locals', 'locale_id', '=', 'locals.id')
            ->join('event_genre','event_id','=', 'events.id')
            ->join('genres','event_genre.genre_id','=', 'genres.id')
            ->select('events.nome as nomeEvento', 'events.organizzatore','events.descrizione','events.costo_ingresso','events.data_svolgimento',
                    'locals.nome as nomeLocale', 'locals.provincia', 'locals.citta', 'locals.indirizzo', 'locals.cap')
            ->where('data_svolgimento',$data)
            ->where('provincia',$localita)
            ->where('genre_id',$genere)
            ->get();
    //  dd($result);

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
