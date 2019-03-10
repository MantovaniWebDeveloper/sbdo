@extends('layouts.admin')
@section('content')
  <div class="">
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
              <a href="#"><h5 class="subTitleNav">Crea</h5></a>
              <a href="#"><h5 class="subTitleNav">Lista</h5></a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="wrapTitle">
            <a href="#"><h5 class="titleNav locale">Locale</h5></a>
          </div>
          <div id="2"class="dropDownMenu">
            <div class="wrapSubTitle">
              <a href="#"><h5 class="subTitleNav">Crea</h5></a>
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
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col " class="text-center">idEvento</th>
              <th scope="col" class="text-center">Evento</th>
              <th scope="col " class="text-center">Data</th>
              <th scope="col " class="text-center">Organizzatore</th>
              <th scope="col " class="text-center">Modifica</th>
              <th scope="col " class="text-center">cancella</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="text-center">1</th>
              <td class="text-center">Mark</td>
              <td class="text-center">Otto</td>
              <td class="text-center">@mdo</td>
              <td class="text-center"><button class="btn btn-success">Modica</button></td>
              <td class="text-center"><button class="btn btn-danger">Elimina</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
