require('../css/app.css');

new WOW().init();

$(document).ready(function(){

  $('.getFotoSeleccionada').click(function(e){
    e.preventDefault();
    var asset = $('#modalGaleriaFotos').attr('data-asset');
    $('#setFotoSeleccionada').attr('src', asset + '/' + this.getAttribute('data-foto'));
  });

});
