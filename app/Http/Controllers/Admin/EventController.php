<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('admin.create');
    }

    public function store(Request $request)
    {
        dd($request);

        return redirect()->route('admin.index');
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
