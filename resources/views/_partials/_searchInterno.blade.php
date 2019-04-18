<div id="internoWraptotale" class="wrapTotale">
  <div id="internoSfondoFront"class="sfondoFront">
    <div id="internoOpacita" class="opacita">
      <div id="internoWrapForm"class="wrapForm">
        <div class="container">
          <form class="" action="{{route('ricercaEventi')}}" method="get">
            {{csrf_field()}}
            @method('GET')

            <div class="form-row">
              <div class="inputMobile col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <label for="citta" class="text-light">Seleziona la località:</label>
                <select id="cities" class="citta-input" style="width:100%; "name="localita">

                </select>
                  <input id="lat" type="hidden" name="latitudine" value="">
                  <input id="long" type="hidden" name="longitudine" value="">
              </div>
              <div class="inputMobile col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <label for="citta" class="text-light">Seleziona la data:</label>
                <input class="form-control"type="date" name="data" id="dataGiorno">
              </div>
              <div class="inputMobile col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 btnWrap">
                <input type="submit" class="btnInvioForm btn text-center btn-success mb-3" name="salva" value="Cerca">
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
        <option class="elemento"  data-lat="@{{lat}}" data-long="@{{lng}}" value="@{{provincia}}">@{{provincia}}</option>
  @{{/each}}
</script>
</script>
