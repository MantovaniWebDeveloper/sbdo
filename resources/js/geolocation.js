const opencage = require('opencage-api-client');
import $ from 'jquery';


if (navigator.geolocation) {
    // supported
    console.log("SUPPORTATO");

    navigator.geolocation.getCurrentPosition(successo, fallito);
} else {
    // not-supported
    console.log("NON SUPPORTATO");

}

function successo(position) {
    var latitudine = position.coords.latitude;
    var longitudine = position.coords.longitude;
    console.log(latitudine);
    console.log(longitudine);

    opencage.geocode({
        q: latitudine + "," + longitudine,
        language: 'it',
        key : '5c5152b1be794404a8fb292c96e25591'
    }).then(data => {
        // console.log(JSON.stringify(data));
        if (data.status.code == 200) {
            if (data.results.length > 0) {
                var place = data.results[0];
                console.log(place.components.village);
                console.log(place.components.county);
                //$('#select2-search__field').val(place.components.village);
                $('.select2-selection--single').hide();
                $('#citiesNascosto').show();
                $('#citiesNascosto').val(place.components.village);
                $('#lat').val(latitudine);
                $('#long').val(longitudine);
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
}

function fallito() {
    console.log("non trovo nulla");

}
