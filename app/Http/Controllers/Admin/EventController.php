<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Event;
use App\Local;
use App\Genre;

class EventController extends Controller
{

    public function index()
    {
        $idUser = Auth::user()->id;

        if (Auth::user()->hasRole('superadmin')) {
          $eventi = Event::all();
        }
        else if (Auth::user()->hasRole('Editor')) {
          $eventi = Event::where('user_id',$idUser)->get();
        }
        else {
          $eventi = Event::all();
        }

        //dd($eventi);
        return view('admin.home', compact('eventi'));
    }

    public function create()
    {
        $locali = Local::all();
        $generi = Genre::all();

        return view('admin.evento.create', compact('locali','generi'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        //recupero tutto dal form crea evento
        $dataEvento = $request->all();
        //creo uno slug dal nome del evento con Str::slug
        $dataEvento['slug'] = Str::slug($dataEvento['nomeEvento']);
        //carico img e gli faccio creare la cartella locandine_eventi nel disco pubblico
        $locandina = Storage::disk('public')->put('locandine_eventi', $dataEvento['locandina']);
        //gli metto dentro al dataEvento la locandina caricata
        $dataEvento['locandina'] = $locandina;
        $nuovoEvento = new Event();
        $nuovoEvento->fill($dataEvento);
        $nuovoEvento->save();
        //salvataggio nella tabella pivot del molti a molti
        foreach($dataEvento['generi'] as $idGenere) {
          $nuovoEvento->generi()->attach($idGenere);
        }


        return redirect()->route('index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $evento = Event::find($id); // metodo con find
        $locali = Local::all();
        $generi = Genre::all();

        return view('admin.evento.update', compact('evento','locali','generi'));
    }

    public function update(Request $request, $id)
    {
        //recupero evento da modificare tramite id
        $evento = Event::find($id);

        $dataEvento = $request->all();
        $locandinaAggiornata = Storage::putFile('locandine_eventi', $request->file('locandina'));
        $dataEvento['locandina'] = $locandinaAggiornata;

        $evento->update($dataEvento);

        return redirect()->route('index');
    }

    public function destroy($id)
    {
      // metodo con find trovo tramite id
      $evento = Event::find($id);
      //elimino */
      $evento->delete();

      return redirect()->route('index');
    }
}
