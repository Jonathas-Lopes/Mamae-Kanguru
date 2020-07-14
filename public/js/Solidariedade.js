$(document).ready(function () {
  var maxHeight = 0;

  $(".card").each(function () {
    if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
  });

  $(".card").height(maxHeight + 60);

  $('.modal').modal();

  $('.tooltipped').tooltip({ delay: 50 });

});
