$(document).ready(function () {
  
  $("#sidebar").mCustomScrollbar({
      theme: "minimal"
  });

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });

  // Instantiate a slider
  $("#hargaSlider").slider({
    tooltip: 'always',
    focus: 'true'
  });
  $("#hargaSlider").on("slide", function(slideEvt) {
    $("#minHargaSlider").text(slideEvt.value[0]);
    $("#maxHargaSlider").text(slideEvt.value[1]);
  });
  
  // Date Picker
  $('[data-toggle="datepicker"]').datepicker();
  

});

