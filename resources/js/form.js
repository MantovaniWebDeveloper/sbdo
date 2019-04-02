var $ = require('jquery');
import Handlebars from 'handlebars/dist/cjs/handlebars';

$(document).ready(function() {
  //alert('sono vivo');

    //alert('sono vivo');
    $.ajax({
      url: 'http://127.0.0.1:8000/api/cities',
      type:'GET',
      success: function(data){
        console.log(data);
        renderDatalistCitta(data);
      $( "#citta-input" ).on( "change", function() {
          //recupero i valori di latitudine e longitudine da hendlebar in modalita no geolocalizzazione
          var latitudineNoGeo = $("#cities option[value='" + $('#citta-input').val() + "']").attr("data-lat");
          var longitudineNoGeo = $("#cities option[value='" + $('#citta-input').val() + "']").attr("data-long");
          console.log(latitudineNoGeo);
          console.log(longitudineNoGeo)
          //e li stampo negli input nascosti
          $('#lat').val(latitudineNoGeo);
          $('#long').val(longitudineNoGeo);
        });
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


});
