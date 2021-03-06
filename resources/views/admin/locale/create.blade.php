@extends('layouts.admin')
@section('content')
  @include('_partials.menuMobileAdmin')
  <div id="wrapDashBoard">
    @include('_partials.menu')
    <div id="contentDashBoard">
      <div class="container">
        <h2 class="titleForm">Crea un locale</h2>
        <h3 class="titleForm">Geolocalizza il locale</h3>
        <div class="row mb-3">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="Citta" class="text-light">Citta</label>
            <input id="citta" name="citta" type="text" class="form-control"  placeholder="Inserisci citta..">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="provincia" class="text-light">Provincia</label>
            <input id="provincia" name="provincia" class="form-control"type="text"  value="" placeholder="Inserisci provincia..">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="indirizzo" class="text-light">Indirizzo</label>
            <input id="indirizzo" name="indirizzo" class="form-control"type="text"  value="" placeholder="Inserisci indirizzo..">
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="cap" class="text-light">cap</label>
            <input id="cap"name="cap" class="form-control"type="text"  value="" placeholder="Inserisci cap..">
          </div>
        </div>
        <input id="btnLoc" class="col-12 btn btn-success btn-lg mb-3"type="submit"  value="Salva posizione locale">

        <form class="" action="{{route('salvaLocale')}}" method="post" >
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <label for="Nome Locale" class="text-light">Nome Locale</label>
              <input name="nome" type="text" class="form-control"  placeholder="Inserisci nome locale..">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <label for="Citta" class="text-light">Citta</label>
              <input id="cittaCrea" name="citta" type="text" class="form-control"  placeholder="Inserisci citta..">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <label for="provincia" class="text-light">Provincia</label>
              <input id="provinciaCrea" name="provincia" class="form-control"type="text"  value="" placeholder="Inserisci provincia..">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <label for="indirizzo" class="text-light">Indirizzo</label>
              <input id="indirizzoCrea" name="indirizzo" class="form-control"type="text"  value="" placeholder="Inserisci indirizzo..">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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
