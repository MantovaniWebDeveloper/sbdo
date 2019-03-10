<div id="internoWraptotale" class="wrapTotale">
  <div id="internoSfondoFront"class="sfondoFront">
    <div id="internoOpacita" class="opacita">
      <div id="internoWrapForm"class="wrapForm">
        <div class="container">
          <h3 class="py-3">Trova le tue serate di ballo</h3>
          <form class="" action="{{route('event.search')}}" method="POST">
            @csrf
            @method('POST')

            <div class="form-row">
              <div class="col-3">
                 <input type="text" class="form-control" placeholder="Inserisci la città" name="localita">
              </div>
              <div class="col-4">
                <select id="genere" class="form-control" name="genere">
                    <option selected>Scegli il genere principale</option>
                    <option value="1">Salsa cubana</option>
                    <option value="2">Salsa portoricana</option>
                    <option value="3">Bachata</option>
                    <option value="4">Kizomba</option>
                </select>
              </div>
              <div class="col-3">
                <input class="form-control"type="date" name="data" value="">
              </div>
              <div class="col-2">
                <input type="submit" class="btn text-center btn-success" name="salva" value="Cerca">
              </div>
            </div>
          </form>
          </div>
        </div>
    </div>
  </div>
</div>
