$(document).ready(function(){
    $('.modal').modal();

var maxHeight = 0;

$(".card-panel").each(function(){
   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});

$(".card-panel").height(maxHeight+60);

  });