require('./bootstrap');


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {

  //recuperare data odierna e poi inserita nel inputa della data del search
  let oggi = new Date().toISOString().substr(0, 10);
  console.log(oggi);
  $('#dataGiorno').val(oggi);

  $('#descrizioneEvento').summernote();
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

//gestione menu admin
  $(".eventoDesktop").on("click",function(){
      //alert('ciao');
      $('#uno').toggle();
  });

  $(".localeDesktop").on("click",function(){
      //alert('ciao');
      $('#due').toggle();

  });
  $(".genereDesktop").on("click",function(){
      //alert('ciao');

  });
  $(".eventoMobile").on("click",function(){
      //alert('ciao');
      $('#unoMobile').toggle();
  });

  $(".localeMobile").on("click",function(){
      //alert('ciao');
      $('#dueMobile').toggle();

  });
  $(".genereMobile").on("click",function(){
      //alert('ciao');

  });






  //alert("vivo");
  //recupero il link del menu
  /*var btnEvento = $('.evento2');
  var btnLocale = $('.locale');

  btnEvento.on({
    click: function() {
      alert('ciao');
      $('#1').show(400);
    },
  });

  btnLocale.on({
    click: function() {
      $('#2').show(400);
    },
  });*/

});
