@extends('layouts.admin')
@section('content')
  <div class="">
    @include('_partials.menuMobileAdmin')
    <div id="wrapDashBoard">
      @include('_partials.menu')
      <div id="contentDashBoard">
        <div class="container">
          @foreach ($eventi as  $evento)

          <div class="card text-center mt-2">
              <div class="card-header">
                  <h4 class="card-title">{{$evento->nomeEvento}}</h4>
              </div>
              <div class="card-body">
                <p class="card-text">nome organizzatore: {{$evento->organizzatore}}</p>
                <p class="card-text">data data svolgimento: {{ date("d-m-Y", strtotime($evento->data_svolgimento)) }}</p>
                <p class="card-text">presso: {{$evento->locale->nome}}</p>
                <a href="{{ route('modificaEvento', $evento->id)}}"><button class="btn btn-success">Modica</button></a>
                <form class="formButton" action="{{ route('cancellaEvento', $evento->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger" type="submit" name="" value="Elimina">
                </form>
              </div>
              <div class="card-footer text-muted">
                 <small class="pl-2">creato da:</small>
                 <small class="pl-2" >{{$evento->user->name}} - </small>
                 <small>{{$evento->user->email}}</small>
              </div>

          </div>
          @endforeach
      </div>
    </div>
  </div>

@endsection
