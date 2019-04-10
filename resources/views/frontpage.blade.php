@extends('layouts.front')
@include('_partials._header')
@section('content')
  @include('_partials._search')
        <div class="info pt-4">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3>Stasera balliamo è il primo motore di ricerca italiano, per le serate latine</h3>
                <p>In <b>Stasera balliamo</b> puoi trovare le migliori serate latine su tutto il territorio italiano. Inserendo la localita e la data nel nostro motore di ricerca, potrai trovare la tua serata di ballo ideale. Puoi filtrare la ricerca anche per generi, come la<br /> <b>salsa cubana, salsa portoricana, bachata e kizomba.</b>
                I risultati di ricerca di <b>Stasera balliamo</b> ti daranno tutte le informazioni necessarie per trovare la tua serata di ballo ideale dai generi di ballo, ai dj, dal costo d'ingresso nel locale, ai tesseramenti necessari, più tutte le informazioni stradali per arrivare al locale.
                </p>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3>Alla domanda: dove si balla stasera ? Stasera ballimo ti risponde!</h3>
                  <p>Stasera balliamo è nato proprio per rispondere a questa domanda.<br />
                  Trovare una giusto evento di ballo, senza perdersi nel caos dei social e delle notifiche. Qui sei tu Ballerino che comandi e scegli la tua miglior serata di ballo.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="promo">
          <div class="container">
            <div class="jumboDario text-center">
              <div class="jumboTesto">
                <h3 class="jumboTitolo">VUOI DARE PIU’ VISIBILITA’ ALLA TUA SERATA DI BALLO?</h3>
                <h4 class="jumboSottoTitolo">Salvando la tua serata di ballo nel nostro sistema riuscirai Sicuramente ad incrementare
                  il tu pubblico.</h4>
              </div>
              <a href="#"><button class="btn btn-success btn-lg">AUMENTA LA VISIBILITA' DEL TUO EVENTO</button></a>
            </div>
          </div>
        </div>
@endsection
