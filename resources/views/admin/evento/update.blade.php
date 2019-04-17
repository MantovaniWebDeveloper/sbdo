@extends('layouts.admin')
@section('content')
  <div class="">
    @include('_partials.menuMobileAdmin')
    <div id="wrapDashBoard">
      @include('_partials.menu')
      <div id="contentDashBoard">
        <div class="container">
          <h2 class="titleForm">Modifica evento</h2>
          <form class="" action="{{route('updateEvento', $evento->id)}}" method="post" enctype="multipart/form-data">
            @csrf_field
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
              <div class="col-6">
                <input type="hidden" name="" value="{{$evento->id}}">
                <label for="nome evento" class="text-light">Nome evento</label>
                <input name="nomeEvento" type="text" class="form-control"  value="{{$evento->nomeEvento}}">
              </div>
              <div class="col-6">
                <label for="organizzatore" class="text-light">Organizzatore</label>
                <input name="organizzatore" type="text" class="form-control"  value="{{$evento->organizzatore}}">
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
              <input type="file" name="locandina"  value="">
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
                <input name="costo_ingresso" class="form-control"type="text" name="" value="{{$evento->costo_ingresso}}">
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
