require('../css/app.css');

new WOW().init();

$(function(){
    $("a[title ~= 'BotDetect']").removeAttr("style");
    $("a[title ~= 'BotDetect']").removeAttr("href");
    $("a[title ~= 'BotDetect']").css('visibility', 'hidden');
});

$(document).ready(function(){

  $('.getFotoSeleccionada').click(function(e){
    e.preventDefault();
    var asset = $('#modalGaleriaFotos').attr('data-asset');
    $('#setFotoSeleccionada').attr('src', asset + '/' + this.getAttribute('data-foto'));
  });
});
