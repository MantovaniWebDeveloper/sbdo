require('./bootstrap');




$(document).ready(function() {
  //recuperare data odierna e poi inserita nel inputa della data del search
  let oggi = new Date().toISOString().substr(0, 10);
  console.log(oggi);
  $('#dataGiorno').val(oggi);
  //jquery front end

  var hamburger = $('.hambMenu ');

  hamburger.on( "click", function() {

    console.log( 'mi hai cliccato');
    $('.hamburgerMobileMenu').addClass('open');
  });

  $('.hamburgerMobileMenu > a').on( "click", function() {

    console.log( 'mi hai cliccato per chiudere');
    $('.hamburgerMobileMenu').removeClass('open');
  });










  //alert("vivo");
  //recupero il link del menu
  var btnEvento = $('.evento');
  var btnLocale = $('.locale');

  btnEvento.on({
    click: function() {
      $('#1').show(400);
    },
  });

  btnLocale.on({
    click: function() {
      $('#2').show(400);
    },
  });

});
