<div id="internoWraptotale" class="wrapTotale">
  <div id="internoSfondoFront"class="sfondoFront">
    <div id="internoOpacita" class="opacita">
      <div id="internoWrapForm"class="wrapForm">
        <div class="container">
          <form class="" action="{{route('ricercaEventi')}}" method="POST">
            @csrf
            @method('POST')

            <div class="form-row">
              <div class="inputMobile col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <!-- <input type="text" class="form-control" placeholder="Inserisci la città" name="localita"> -->
                <input id="citta-input"class="form-control" name="localita" list="cities" style="width:100%"/>
                   <datalist id="cities" style="width:100%">
                     {{--questo sarà riempito da handlebars--}}
                   </datalist>              </div>
              <div class="inputMobile col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <input class="form-control"type="date" name="data" value="">
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
        <option class="elemento" data-id="@{{sigla}}" value="@{{provincia}}"></option>
  @{{/each}}
  </datalist>

</script>
