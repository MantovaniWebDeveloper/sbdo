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
                <h4>{{$evento->data_svolgimento}} - id evento : {{$evento->id}}</h4>
                <h4 class="text-right">utente: {{$evento->user_id}}</h4>
              </div>
              <div class="card-body">
                <h5 class="card-title">nome evento: {{$evento->nomeEvento}}</h5>
                <p class="card-text">nome organizzatore: {{$evento->organizzatore}}</p>
                <a href="{{ route('modificaEvento', $evento->id)}}"><button class="btn btn-success">Modica</button></a>
                <form class="formButton" action="{{ route('cancellaEvento', $evento->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger" type="submit" name="" value="Elimina">
                </form>
              </div>
              <div class="card-footer text-muted">
                2 days ago
              </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection
