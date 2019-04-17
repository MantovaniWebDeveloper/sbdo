<div id="menuDashBoard">
  <div class="box">
    <div class="wrapTitle">
      <a href="{{ route('index') }}"><h5 class="titleNav dash">Dashboard</h5></a>
    </div>
  </div>
  <div class="box">
    <div class="wrapTitle">
      <a href="#"><h5 class="titleNav eventoDesktop">Evento</h5></a>
    </div>
    <div id="uno"class="dropDownMenuDesktop">
      <div class="wrapSubTitle">
        <a href="{{ route('creaEvento')}}"><h5 class="subTitleNav">Crea</h5></a>
      </div>
    </div>
  </div>
  <div class="box">
    <div class="wrapTitle">
      <a href="#"><h5 class="titleNav localeDesktop">Locale</h5></a>
    </div>
    <div id="due"class="dropDownMenuDesktop">
      <div class="wrapSubTitle">
        <a href="{{ route('creaLocale')}}"><h5 class="subTitleNav">Crea</h5></a>
        <a href="{{ route('listaLocali')}}"><h5 class="subTitleNav">Lista</h5></a>
      </div>
    </div>
  </div>
  <div class="box">
    <div class="wrapTitle">
      <a href=" "><h5 class="titleNav genereDesktop">Genere musicale</h5></a>

    </div>
  </div>
  <div class="box">
    <div class="wrapTitle">
      <a href=""><h5 class="titleNav utentiDesktop">Crea utente</h5></a>
    </div>
  </div>
</div>
