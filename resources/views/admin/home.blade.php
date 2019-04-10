@extends('layouts.admin')
@section('content')
  <div class="">
    <div id="menuDashBoardMobile">
      <div class="box">
        <div class="wrapTitle">
          <a href=" "><h5 class="titleNav dash">Dashboard</h5></a>
        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href="#"><h5 class="titleNav eventoMobile">Evento<i class="fas fa-sort-down ml-1 pb-1"></i></h5></a>
        </div>
        <div id="unoMobile"class="dropDownMenuMobile">
          <div class="wrapSubTitle wrapCrea">
            <a href="{{ route('creaEvento')}}"><h5 class="subTitleNav">Crea</h5></a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href="#"><h5 class="titleNav localeMobile">Locale<i class="fas fa-sort-down ml-1 pb-1"></i></h5></a>
        </div>
        <div id="dueMobile"class="dropDownMenuMobile">
          <div class="wrapSubTitle">
            <a href="{{ route('creaLocale')}}"><h5 class="subTitleNav">Crea</h5></a>
            <a href="#"><h5 class="subTitleNav">Lista</h5></a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href=" "><h5 class="titleNav genereMobile">Genere musicale <i class="fas fa-sort-down ml-1 pb-1"></i></h5></a>

        </div>
      </div>
      <div class="box">
        <div class="wrapTitle">
          <a href=" "><h5 class="titleNav dj">Dj</h5></a>

        </div>
      </div>
    </div>
    <div id="wrapDashBoard">
      <div id="menuDashBoard">
        <div class="box">
          <div class="wrapTitle">
            <a href=" "><h5 class="titleNav dash">Dashboard</h5></a>
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
              <a href="#"><h5 class="subTitleNav">Lista</h5></a>
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
            <a href=" "><h5 class="titleNav dj">Dj</h5></a>

          </div>
        </div>
      </div>
      <div id="contentDashBoard">
        <div class="table-responsive">
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
              @foreach ($eventi as  $evento)
                <tr>
                  <th class="text-center">{{$evento->id}}</th>
                  <td class="text-center">{{$evento->nomeEvento}}</td>
                  <td class="text-center">{{$evento->data_svolgimento}}</td>
                  <td class="text-center">{{$evento->organizzatore}}</td>
                  <td class="text-center"><a href="{{ route('modificaEvento', $evento->id)}}"><button class="btn btn-success">Modica</button></a></td>
                  <td class="text-center">
                    <form class="" action="{{ route('cancellaEvento', $evento->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" name="" value="Elimina">
                  </form>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

@endsection
