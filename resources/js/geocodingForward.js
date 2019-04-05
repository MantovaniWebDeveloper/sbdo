const opencage = require('opencage-api-client');

$(document).ready(function() {

  $('#btnLoc').on('click', function(){

    //recupero i valori neccessari per la chiamata api opencag

    var citta = $('#citta').val();
    var provincia = $('#provincia').val();
    var indirizzo = $('#indirizzo').val();
    var cap = $('#cap').val();

    opencage.geocode({
        q: indirizzo + " " + cap + " " + citta + " " + provincia,
        language: 'it',
        key : '5c5152b1be794404a8fb292c96e25591'
    }).then(data => {
        // console.log(JSON.stringify(data));
        if (data.status.code == 200) {
            if (data.results.length > 0) {
                var place = data.results[0];
                console.log(place.geometry.lat);
                console.log(place.geometry.lng);
            }
        } else if (data.status.code == 402) {
            console.log('hit free-trial daily limit');
            console.log('become a customer: https://opencagedata.com/pricing');
        } else {
            // other possible response codes:
            // https://opencagedata.com/api#codes
            console.log('error', data.status.message);
        }
    }).catch(error => {
        console.log('error', error.message);
    });
  })

});
