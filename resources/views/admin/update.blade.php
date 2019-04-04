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
              <a href="{{ route('creaEvento')}}"><h5 class="subTitleNav">Crea</h5></a>
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
        <div class="container">
          <h2 class="titleForm">Crea evento</h2>
          <form class="" action="{{route('store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-6">
                <input type="hidden" name="" value="{{$evento->id}}">
                <label for="nome evento" class="text-light">Nome evento</label>
                <input name="nomeEvento" type="text" class="form-control"  placeholder="{{$evento->nomeEvento}}">
              </div>
              <div class="col-6">
                <label for="organizzatore" class="text-light">Organizzatore</label>
                <input name="organizzatore" type="text" class="form-control"  placeholder="{{$evento->organizzatore}}">
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <label for="data_evento" class="text-light">Data del evento</label>
                <input name="data_svolgimento" type="date" class="form-control">
              </div>
              <div class="col-6">
                <label for="locale" class="text-light">Segli il locale</label>
                <select class="form-control" name="locale_id">
                  @foreach ($locali as $locale)
                    <option value="{{$locale->id}}">{{$locale->nome}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="custom-file mb-3 mt-3">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required name="locandina">
              <label class="custom-file-label" for="validatedCustomFile">Carica locandina...</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
            <div class="form-group">
              <label for="descrizione" class="text-light">Descrizione</label>
              <textarea class="form-control" name="descrizione" rows="8" cols="80">
                {{$evento->descrizione}}
              </textarea>
            </div>
            <div class="row mb-2">
              <div class="col-6">
                <label for="costo" class="text-light">Costo ingresso</label>
                <input name="costo_ingresso" class="form-control"type="text" name="" value="" placeholder="{{$evento->costo_ingresso}}">
              </div>
              <div class="col-6">
                @foreach ($generi as  $genere)
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input checkGeneri" type="checkbox" id="inlineCheckbox1" name="generi[]" value="{{$genere->id}}">
                    <label class="form-check-label text-light" for="inlineCheckbox1">{{$genere->nome}}</label>
                  </div>
                @endforeach
              </div>
            </div>
            <input class="col-12 btn btn-success btn-lg"type="submit" name="" value="Salva">
          </form>
        </div>

      </div>
    </div>
  </div>
@endsection
