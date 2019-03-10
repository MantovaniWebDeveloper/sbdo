@extends('layouts.front')
@include('_partials._header')
@section('content')
@include('_partials._searchInterno')

<!--QUI CI VANNO I RISULTATI DEL FORM SEARCH EVENTI-->
<div class="container">
  @foreach ($eventi as $key => $evento)
    <div class="row resultContentInterno">
      <div class="col-5">
        <div class="imgCategory">
          <img class="img-fluid" src="{{asset('images/logocasino.png')}}" alt="">

        </div>
      </div>
      <div class="col-7">
        <h2>{{$evento->nomeEvento}}</h2>
        @if($evento->costo_ingresso == 0)
          <span>Ingresso gratuito</span>

        @else
          <span>costo ingresso: {{$evento->costo_ingresso}} €</span>

        @endif
        <div>
          <i class="fas fa-map-marker-alt pr-2"></i>
          <small>{{$evento->nomeLocale}}</small>
          <small>{{$evento->indirizzo}}</small>
          <small>{{$evento->citta}}</small> - <small>{{$evento->provincia}}</small>
          <p>{{$evento->descrizione}}</p>
        </div>
      
      </div>
    </div>
  @endforeach

</div>

@endsection
