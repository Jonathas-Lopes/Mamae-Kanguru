$(document).ready(function () {
    $('.sidenave-Reservas').sidenav();
    
    $('.trigger-Reservas').click(function () {
        $('.sidenave-Reservas').sidenav('open');
    });

    $('.espaco').click(function(){
        var pagename= $(this).attr('id');
        $('.espaco').addClass('invisivel');        
        setTimeout(function(){ getPage(pagename, ".main");}, 3000);
        console.log('hello');
    
      });

});