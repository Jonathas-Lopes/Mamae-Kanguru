$(document).ready(function () {
      

    $('.carousel').carousel();

    $('.modal').modal();

    $('.tooltipped').tooltip({delay: 50});

    // estilização dos ícones da navbar
    $('.reservar').css({
        'color': 'white',
        'font-size': '3rem',
        'text-shadow': '1px 1px 3px grey'
    });

});

$('.carousel.carousel-slider').carousel({fullWidth: true});