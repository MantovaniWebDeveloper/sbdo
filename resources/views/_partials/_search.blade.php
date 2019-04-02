<div class="wrapTotale">
  <div class="sfondoFront">
    <div class="opacita">
      <div class="wrapForm">
        <div class="container">
            <h3 class="motto">Trova le tue serate di ballo</h3>
            <div class="text-center">
              <p class="lead" >Le migliori serate di Salsa cubana, Salsa portoricana, Bachata, Kizomba sul terriotorio italiano</small>
            </div>

          <form class="" action="{{route('ricercaEventi')}}" method="get">
            @csrf
            @method('GET')

            <div class="form-row">
              <div class="inputMobile col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                 <!-- <input type="text" class="form-control" placeholder="Inserisci la città" name="localita"> -->
                 <input id="citta-input"class="form-control" lat="" name="localita" list="cities" style="width:100%"/>
                    <datalist id="cities" style="width:100%">
                      {{--questo sarà riempito da handlebars--}}
                    </datalist>
                  <input id="lat" type="hidden" name="latitudine" value="">
                  <input id="long" type="hidden" name="longitudine" value="">
              </div>
              <div class="inputMobile col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <input class="form-control"type="date" name="data" id="dataGiorno">
              </div>
              <div class="inputMobile col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                <input type="submit" class="btnInvioForm btn text-center btn-success" name="salva" value="Cerca">
              </div>
            </div>
          </form>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- ZONA HANDLEBARS!!!-->
<script id="listaCitta-template" type="text/x-handlebars-template">
  @{{#each this}}
        <option class="elemento" lat="@{{lat}}" long="@{{lng}}" datavalue="@{{provincia}}">@{{provincia}}</option>        
  @{{/each}}
  </datalist>

</script>
