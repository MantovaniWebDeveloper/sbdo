@extends('layouts.admin')
@section('content')
  <div class="">
    @include('_partials.menuMobileAdmin')
    <div id="wrapDashBoard">
      @include('_partials.menu')
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
