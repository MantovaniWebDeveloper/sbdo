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
      },
      error: function (errore) {
            console.log(errore);
      }
    })

    //funzione per stampare via handlebars le citta nel datalist
    function renderDatalistCitta(data) {
        var templateBase = $('#listaCitta-template').html();
        var templateCompilato = Handlebars.compile(templateBase);
        var html = templateCompilato(data);
        $('#cities').html(html);
    }
});
