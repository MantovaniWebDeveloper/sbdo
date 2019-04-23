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
                <!--<input class="form-control"type="date" name="data" id="dataGiorno"> -->
              <input type="text" class="datepicker form-control" name="data" id="dataGiorno" autocomplete="off"/>

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
<script type="text/javascript">

$('.datepicker').datepicker({
  dateFormat : "yy/mm/dd" ,
  showAnim: "slideDown",
  monthNames: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno', 'Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
  monthNamesShort: ['Gen','Feb','Mar','Apr','Mag','Giu', 'Lug','Ago','Set','Ott','Nov','Dic'],
  dayNames: ['Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato'],
  dayNamesShort: ['Dom','Lun','Mar','Mer','Gio','Ven','Sab'],
  dayNamesMin: ['Do','Lu','Ma','Me','Gio','Ve','Sa'],
  firstDay: 1,
  isRTL: false
}) ;
</script>
