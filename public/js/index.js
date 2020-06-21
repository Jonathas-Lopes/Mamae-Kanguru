
$(document).ready(function () {
  $('.datepicker').datepicker();
  $('.sidenav').sidenav();

  $('.imagem-1').click(function () {
    $('.abas').children().removeClass('active');
    getPage("home", ".main");
  });

  openNewTab();
  getPage("home", ".main");

  $('.sidenav').sidenav();

  
 

  /** código de inicialização do dropdown */
  $('.dropdown-trigger').dropdown();



});

