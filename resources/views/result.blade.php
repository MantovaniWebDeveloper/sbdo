@extends('layouts.front')
@include('_partials._header')
@section('content')
@include('_partials._searchInterno')

<!--QUI CI VANNO I RISULTATI DEL FORM SEARCH EVENTI-->
<div class="wrapResultEvent">
  <div class="container">
    <h3 class="titoloHomeResult">Risultati della ricerca su : {{$localita}}</h3>
    <div class="wrapReslutContentInterno">
        @foreach ($eventi as $key => $evento)
              <div class="row mb-2">
              <div class="imgCategory col-12 col-sm-12 col-md-4 col-lg-4">
                <img class="img-fluid-dario" src="{{asset('storage/' . $evento->locandina)}}" alt="">
              </div>
              <div class="contentText col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="wrapTitoloEvento">
                  <a href="{{ route('event.show', $evento->id) }}"><h3 class="nomeEvento pr-3 ">{{$evento->nomeEvento}}</h3></a>
                </div>
                <div class="locale">
                  <p class="nominativoLocale">{{$evento->nomeLocale}}</p>
                </div>
                <div class="indirizzo">
                  <i class="fas fa-map-marker-alt pr-1"></i>
                  <small >{{$evento->indirizzo}}</small> <small>{{$evento->citta}}</small> - <small>{{$evento->provincia}}</small>
                </div>
                  @if($evento->costo_ingresso == 0)
                    <div class="ingressoGratuito">
                      <p>Ingresso gratuito</p>
                    </div>

                  @else
                    <div class="ingressoPagamento">
                      <p>costo ingresso: {{$evento->costo_ingresso}} €</p>
                    </div>
                  @endif

                  <div>
                    <p class="pt-3">{{$evento->descrizione}}</p>
                  </div>
              </di
              v>
              <div class="wrapGeneri"></div>
            </div>

          </div>
        @endforeach
  </div>
</div>
@endsection
