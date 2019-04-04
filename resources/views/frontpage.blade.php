@extends('layouts.front')
@include('_partials._header')
@section('content')
  @include('_partials._search')
        <div class="wrapResultEvent">
        <div class="container">
          <h3 class="titoloHomeResult">I migliori eventi di oggi: </h3>
              @foreach ($eventi as $key => $evento)
                  <div class="wrapReslutContentInterno">
                    <div class="row">
                    <div class="imgCategory col-12 col-sm-12 col-md-4 col-lg-4">
                      <!-- PEr recupeare img da storage devo fare cosi asset('storage/' . $evento->locandina)-->
                      <img class="img-fluid" src="{{asset('storage/' . $evento->locandina)}}" alt="">

                    </div>
                    <div class="contentText col-12 col-sm-12 col-md-8 col-lg-8">
                      <a href="{{ route('event.show', $evento->id) }}"><span class="nomeEvento pr-3 ">{{$evento->nomeEvento}}</span></a>
                        @if($evento->costo_ingresso == 0)
                          <span>Ingresso gratuito</span>

                        @else
                          <span>costo ingresso: {{$evento->costo_ingresso}} €</span>

                        @endif

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

                      <i class="fas fa-map-marker-alt pr-2"></i>
                      <small>{{$evento->locale->nome}}</small>
                      <small >{{$evento->locale->indirizzo}}</small>
                      <small>{{$evento->locale->citta}}</small> - <small>{{$evento->locale->provincia}}</small>
                      <p class="pt-3">{{$evento->descrizione}}</p>

                    </div>
                  </div>

                </div>
              @endforeach
        </div>
        <div class="">

        </div>
        </div>
        <div class="promo">
          <div class="container">
            <div class="jumboDario text-center">
              <div class="jumboTesto">
                <h3 class="jumboTitolo">VUOI DARE PIU’ VISIBILITA’ ALLA TUA SERATA DI BALLO?</h3>
                <h4 class="jumboSottoTitolo">Salvando la tua serata di ballo nel nostro sistema riuscirai Sicuramente ad incrementare
                  il tu pubblico.</h4>
              </div>
              <a href="#"><button class="btn btn-success btn-lg">AUMENTA LA VISIBILITA' DEL TUO EVENTO</button></a>
            </div>
          </div>
        </div>


@endsection
