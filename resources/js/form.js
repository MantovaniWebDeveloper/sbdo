import Handlebars from 'handlebars/dist/cjs/handlebars';
import $ from 'jquery';
import select2 from 'select2';

$(document).ready(function() {
  //alert('sono vivo');

    //alert('sono vivo');
    $.ajax({
      url: 'https://www.staseraballiamo.it/api/cities',
      type:'GET',
      success: function(data){
        console.log(data);
        renderDatalistCitta(data);
        recuperoCordinateSenzaGeo();
      },
      error: function (errore) {
            console.log(errore);
      }
    })

    //funzione per stampare via handlebars le citta nel datalist
    function renderDatalistCitta(data) {
      console.log("sono dentro render");
        var templateBase = $('#listaCitta-template').html();
        var templateCompilato = Handlebars.compile(templateBase);
        var html = templateCompilato(data);
        $('#cities').html(html);
    }

    function recuperoCordinateSenzaGeo() {
      $( "#cities" ).on( "change", function() {
          //recupero i valori di latitudine e longitudine da hendlebar in modalita no geolocalizzazione
          var latitudineNoGeo = $("#cities option[value='" + $('#cities').val() + "']").attr("data-lat");
          var longitudineNoGeo = $("#cities option[value='" + $('#cities').val() + "']").attr("data-long");
          console.log(latitudineNoGeo);
          console.log(longitudineNoGeo)
          //e li stampo negli input nascosti
          $('#lat').val(latitudineNoGeo);
          $('#long').val(longitudineNoGeo);
        });
    }

});

$('.citta-input').select2({
  height: '100%',
});
