<div class="wrapResultEvent">
  <div class="container">
    <h3>I migliori eventi di oggi {{$dataOdierna}}</h3>
    <div id="container_result">
      <div class="resultContent">
        @foreach ($eventi as $key => $evento)
          <div class="wrapReslutContentInterno">
              <div class="imgCategory">
                <img class="img-fluid" src="{{asset('images/logocasino.png')}}" alt="">

              </div>
              <div class="contentText">
                <span class="nomeEvento pr-3">{{$evento->nome}}</span>
                  @if($evento->costo_ingresso == 0)
                    <span>Ingresso gratuito</span>

                  @else
                    <span>costo ingresso: {{$evento->costo_ingresso}} €</span>

                  @endif

                <div class="wrapGeneriList">
                  @foreach ($evento->generi as $genere)

                    @if($genere->id == 1)
                      <div class="salsaCubana">
                          <p>{{$genere->nome}}</p>
                      </div>
                    @elseif ($genere->id == 2)
                      <div class="salsaPortoricana">
                          <p>{{$genere->nome}}</p>
                      </div>
                    @elseif ($genere->id == 3)
                      <div class="bachata">
                          <p>{{$genere->nome}}</p>
                      </div>
                    @else
                      <div class="kizomba">
                          <p>{{$genere->nome}}</p>
                      </div>
                    @endif
                  @endforeach
                    <p></p>
                </div>
                <i class="fas fa-map-marker-alt pr-2"></i>
                <small>{{$evento->locale->nome}}</small>
                <small>{{$evento->locale->indirizzo}}</small>
                <small>{{$evento->locale->citta}}</small> - <small>{{$evento->locale->provincia}}</small>
                <p>{{$evento->descrizione}}</p>

              </div>
          </div>
        @endforeach

      </div>

      <aside class="sidebar">

      </aside>
    </div>

  </div>
</div>
