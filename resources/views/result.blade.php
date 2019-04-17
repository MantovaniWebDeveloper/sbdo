@extends('layouts.front')
@include('_partials._header')
@section('content')
@include('_partials._searchInterno')

<!--QUI CI VANNO I RISULTATI DEL FORM SEARCH EVENTI-->
<div class="wrapResultEvent">
  <div class="container">
    <h3 class="titoloHomeResult">Risultati della ricerca su : {{$localita}}</h3>

        @foreach ($eventi as $key => $evento)
            <div class="wrapReslutContentInterno">
              <div class="row">
              <div class="imgCategory col-12 col-sm-12 col-md-4 col-lg-4">
                <img class="img-fluid" src="{{asset('storage/' . $evento->locandina)}}" alt="">

              </div>
              <div class="contentText col-12 col-sm-12 col-md-8 col-lg-8">
                <a href="{{ route('event.show', $evento->id) }}"><span class="nomeEvento pr-3 ">{{$evento->nomeEvento}}</span></a>
                  @if($evento->costo_ingresso == 0)
                    <span>Ingresso gratuito</span>

                  @else
                    <span>costo ingresso: {{$evento->costo_ingresso}} €</span>

                  @endif

                  <div>
                    <i class="fas fa-map-marker-alt pr-2"></i>
                    <small>{{$evento->nomeLocale}}</small>
                    <small >{{$evento->indirizzo}}</small>
                    <small>{{$evento->citta}}</small> - <small>{{$evento->provincia}}</small>
                    <p class="pt-3">{{$evento->descrizione}}</p>
                  </div>


              </div>
            </div>

          </div>
        @endforeach
  </div>
</div>
@endsection
