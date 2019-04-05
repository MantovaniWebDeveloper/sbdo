@extends('layouts.admin')
@section('content')
  <div id="wrapDashBoard">
    <div id="menuDashBoard">
      <div class="box">
        <div class="wrapTitle">
          <a href=" "><h5 class="titleNav dash">Dashboard</h5></a>
        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href="#"><h5 class="titleNav evento">Evento</h5></a>
        </div>
        <div id="1"class="dropDownMenu">
          <div class="wrapSubTitle">
            <a href="{{ route('creaEvento')}}"><h5 class="subTitleNav">Crea</h5></a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href="#"><h5 class="titleNav locale">Locale</h5></a>
        </div>
        <div id="2"class="dropDownMenu">
          <div class="wrapSubTitle">
            <a href="{{ route('creaLocale')}}"><h5 class="subTitleNav">Crea</h5></a>
            <a href="#"><h5 class="subTitleNav">Lista</h5></a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href=" "><h5 class="titleNav genere">Genere musicale</h5></a>

        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href=" "><h5 class="titleNav dj">Dj</h5></a>

        </div>
      </div>
    </div>

    <div id="contentDashBoard">
      <div class="container">
        <h2 class="titleForm">Crea un locale</h2>
        <h3 class="titleForm">Geolocalizza il locale</h3>
        <div class="row mb-3">
          <div class="col-3">
            <label for="Citta" class="text-light">Citta</label>
            <input id="citta" name="citta" type="text" class="form-control"  placeholder="Inserisci citta..">
          </div>
          <div class="col-2">
            <label for="provincia" class="text-light">Provincia</label>
            <input id="provincia" name="provincia" class="form-control"type="text"  value="" placeholder="Inserisci provincia..">
          </div>
          <div class="col-4">
            <label for="indirizzo" class="text-light">Indirizzo</label>
            <input id="indirizzo" name="indirizzo" class="form-control"type="text"  value="" placeholder="Inserisci indirizzo..">
          </div>
          <div class="col-3">
            <label for="cap" class="text-light">cap</label>
            <input id="cap"name="cap" class="form-control"type="text"  value="" placeholder="Inserisci cap..">
          </div>
        </div>
        <input id="btnLoc" class="col-12 btn btn-success btn-lg mb-3"type="submit"  value="Salva posizione locale">

        <form class="" action="{{route('salvaLocale')}}" method="post" >
          @csrf
          <div class="row">
            <div class="col-6">
              <label for="Nome Locale" class="text-light">Nome Locale</label>
              <input name="nome" type="text" class="form-control"  placeholder="Inserisci nome locale..">
            </div>
            <div class="col-6">
              <label for="Citta" class="text-light">Citta</label>
              <input id="cittaCrea" name="citta" type="text" class="form-control"  placeholder="Inserisci citta..">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <label for="provincia" class="text-light">Provincia</label>
              <input id="provinciaCrea" name="provincia" class="form-control"type="text"  value="" placeholder="Inserisci provincia..">
            </div>
            <div class="col-4">
              <label for="indirizzo" class="text-light">Indirizzo</label>
              <input id="indirizzoCrea" name="indirizzo" class="form-control"type="text"  value="" placeholder="Inserisci indirizzo..">
            </div>
            <div class="col-4">
              <label for="cap" class="text-light">cap</label>
              <input id="capCrea"name="cap" class="form-control"type="text"  value="" placeholder="Inserisci cap..">
            </div>
            <input id="latCrea" type="hidden" name="latitudine" value="">
            <input id="lngCrea" type="hidden" name="longitudine" value="">
          </div>
          <input class="col-12 btn btn-success btn-lg"type="submit"  value="Salva">
        </form>
      </div>
    </div>
  </div>
@endsection
