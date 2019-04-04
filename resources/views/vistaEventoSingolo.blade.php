@extends('layouts.front')
@include('_partials._header')
@section('content')
@include('_partials._searchInterno')
<div class="container">
  <div class="row">
    <div class="col-12">
      <img class="locandinaInt img-fluid" src="{{asset('storage/' . $evento->locandina)}}" alt="">
    </div>
  </div>
  <div class="row pt-2">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
      <h2>{{$evento->nomeEvento}}</h2>
      <i class="fas fa-map-marker-alt pr-2"></i>
      <small>{{$evento->locale->nome}}</small>
      <small >{{$evento->locale->indirizzo}}</small>
      <small>{{$evento->locale->citta}}</small> - <small>{{$evento->locale->provincia}}</small>
      <h3 class="pt-2">{{$evento->data_svolgimento}} - 19.30</h3>
    </div>
    <div class="costoBox col-12 col-sm-12 col-md-6 col-lg-6">
      <p>  @if($evento->costo_ingresso == 0)
          <span>Ingresso gratuito</span>

        @else
          <span>costo ingresso: {{$evento->costo_ingresso}} €</span>

        @endif</p>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="generi  row">
        @foreach ($evento->generi as $genere)

          @if($genere->id == 1)
            <div class="col-3">
              <div class="salsaCubana">
                <p>{{$genere->nome}}</p>
              </div>
            </div>
          @elseif ($genere->id == 2)
            <div class=" col-3">
              <div class="salsaPortoricana">
                <p>{{$genere->nome}}</p>
              </div>
            </div>
          @elseif ($genere->id == 3)
            <div class=" col-3">
              <div class="bachata">
                <p>{{$genere->nome}}</p>
              </div>
            </div>
          @else
            <div class=" col-3">
              <div class="kizomba">
                <p>{{$genere->nome}}</p>
              </div>
            </div>
          @endif
        @endforeach
          <p></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-8">
      {{$evento->descrizione}}
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
      <div class="contatti">
        <h3>Contatti organizzatore</h3>
        <ul>
            <li><i class="fas fa-user-alt mr-3"></i></i>{{$evento->organizzatore}}</li>
          <li><i class="fas fa-phone mr-3"></i><a href="tel:+13174562564">317-456-2564</a></li>
          <li><i class="far fa-envelope mr-3"></i><a href="mailto:webmaster@example.com">rated@gmail.com</a></li>
        </ul>
      </div>
      <div class="mappa">
          <div class="gmap_canvas">
            <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q={{$evento->locale->indirizzo}}{{$evento->locale->citta}}{{$evento->locale->provincia}}=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>
            <a href="https://www.pureblack.de"></a>
          </div>

      </div>
    </div>
  </div>
  </div>
</div>
@endsection
