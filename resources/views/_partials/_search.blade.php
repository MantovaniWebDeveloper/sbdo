<div class="wrapTotale">
  <div class="sfondoFront">
    <div class="opacita">
      <div class="wrapForm">
        <div class="container">
            <h3 class="motto">Trova le tue serate di ballo</h3>
            <div class="text-center">
              <p class="lead" >Le migliori serate di Salsa cubana, Salsa portoricana, Bachata, Kizomba sul terriotorio italiano</small>
            </div>

          <form class="" action="{{route('event.search')}}" method="POST">
            @csrf
            @method('POST')

            <div class="form-row">
              <div class="inputMobile col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                 <input type="text" class="form-control" placeholder="Inserisci la città" name="localita">
              </div>
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
