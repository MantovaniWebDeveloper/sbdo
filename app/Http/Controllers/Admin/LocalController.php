<?php

namespace App\Http\Controllers\Admin;

use App\Local;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalController extends Controller
{
    public function index()
    {
        //
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
    public function edit(Local $local)
    {
        //
    }

    public function update(Request $request, Local $local)
    {
        //
    }

    public function destroy(Local $local)
    {
        //
    }
}
