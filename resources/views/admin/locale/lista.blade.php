@extends('layouts.admin')
@section('content')
  @include('_partials.menuMobileAdmin')
  <div id="wrapDashBoard">
    @include('_partials.menu')


    <div id="contentDashBoard">
      <div class="container">
        @foreach ($locali as  $locale)
          <div class="card text-center mt-2 ">
              <div class="card-header">
                <h4> id locale : {{$locale->id}}</h4>
              </div>
              <div class="card-body">
                <h5 class="card-title">nome locale: {{$locale->nome}}</h5>
                <p class="card-text">indirizzo: {{$locale->indirizzo}}</p>
                <form class="formButton" action="{{ route('cancellaLocale', $locale->id) }}" method="post">
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
@endsection
