<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Event;
use App\Local;
use App\Genre;

class EventController extends Controller
{

    public function index()
    {
        $eventi = Event::all();
        //dd($eventi);
        return view('admin.home', compact('eventi'));
    }

    public function create()
    {
        $locali = Local::all();
        $generi = Genre::all();

        return view('admin.create', compact('locali','generi'));
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


        return redirect()->route('index', compact('nuovoEvento'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}