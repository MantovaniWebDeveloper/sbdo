<?php

namespace App\Http\Controllers\Admin;

use App\Local;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalController extends Controller
{
    public function index()
    {
      $locali = Local::all();


      return view('admin.locale.lista', compact('locali'));
    }
    public function create()
    {
        return view('admin.locale.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());

        $dataLocale = $request->all();

        $nuovoLocale = new Local();
        $nuovoLocale->fill($dataLocale);
        $nuovoLocale->save();

        return redirect()->route('index');
    }
    public function show(Local $local)
    {
        //
    }
    public function edit($id)
    {
        $locale = Local::find($id); // metodo con find
      //  dd($locale);
        return view('admin.locale.update', compact('locale'));
    }

    public function update(Request $request, Local $local)
    {
        //
    }

    public function destroy($id)
    {
      // metodo con find trovo tramite id
      $locale = Local::find($id);
      //elimino */
      $locale->delete();

      return redirect()->route('listaLocali');
    }
}
