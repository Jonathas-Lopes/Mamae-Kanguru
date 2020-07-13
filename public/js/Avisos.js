$(document).ready(function () {
    
    $('.botaoanuncio').click(function () {
        $('.modal').modal();
    });
    
    var maxHeight = 0;

    $(".card").each(function(){
       if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
    });
    
    $(".card").height(maxHeight+60);


});