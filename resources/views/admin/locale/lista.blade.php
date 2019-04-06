@extends('layouts.admin')
@section('content')
  <div id="wrapDashBoard">
    <div id="menuDashBoard">
      <div class="box">
        <div class="wrapTitle">
          <a href=" "><h5 class="titleNav dash">Dashboard</h5></a>
        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href="#"><h5 class="titleNav evento">Evento</h5></a>
        </div>
        <div id="1"class="dropDownMenu">
          <div class="wrapSubTitle">
            <a href="{{ route('creaEvento')}}"><h5 class="subTitleNav">Crea</h5></a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href="#"><h5 class="titleNav locale">Locale</h5></a>
        </div>
        <div id="2"class="dropDownMenu">
          <div class="wrapSubTitle">
            <a href="{{ route('creaLocale')}}"><h5 class="subTitleNav">Crea</h5></a>
            <a href="#"><h5 class="subTitleNav">Lista</h5></a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href=" "><h5 class="titleNav genere">Genere musicale</h5></a>

        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href=" "><h5 class="titleNav dj">Dj</h5></a>

        </div>
      </div>
    </div>

    <div id="contentDashBoard">
      <div class="container">
        


      </div>
    </div>
  </div>
@endsection
