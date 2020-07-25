$(document).ready(function(){
  $('.dropdown-trigger').dropdown();
  $('.carousel').carousel(
  {
    dist: 0,
    padding: 0,
    fullWidth: true,
    indicators: true,
    duration: 100,
  })
  // autoplay()
  // function autoplay() {
  //     $('.carousel').carousel('next');
  //     setTimeout(autoplay, 9000);
  // }

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
    }
  });

  $(".edit").click(function () {
    var nomeName = $(this).attr('name') + "nome"
    var data_ = $(this).attr('name') + "data"
    var descricaoName1 = $(this).attr('name') + "descricao_1"
    var descricaoName2 = $(this).attr('name') + "descricao_2"
    var descricaoName3 = $(this).attr('name') + "descricao_3"
    var nome = $('h5[name="' + nomeName + '"]').text()
    var date = $('h6[name="' + data_ + '"]').text() //#data
    var descricao_1 = $('p[name="' + descricaoName1 + '"]').text() //#descricao_1
    var descricao_2 = $('p[name="' + descricaoName2 + '"]').text() //#descricao_2
    var descricao_3 = $('p[name="' + descricaoName3 + '"]').text() //#descricao_3
    var id = $(this).attr('name')

    $.post("/eventos/edit", { 
      id: id, 
      nome: nome, 
      data: date,
      descricao_1: descricao_1, 
      descricao_2: descricao_2, 
      descricao_3: descricao_3
    }, function (data) {
      //console.log(data);
      location.reload();
    });
    console.log($.post())

  });

  $(".delete").click(function () {
    var id = $(this).attr('name')


    $.post("/eventos/delete", { id: id }, function (data) {
      console.log(data);
      location.reload();
    })


  })




  // $('.datepicker').pickadate(
  //   {
  //   selectMonths: false, // Creates a dropdown to control month
  //   selectYears: 15, // Creates a dropdown of 15 years to control year,
  //   today: 'Today',
  //   clear: 'Clear',
  //   close: 'Ok',
  //   closeOnSelect: false, // Close upon selecting a date,
  //   container: undefined, // ex. 'body' will append picker to body
  //   format: 'mm/dd/yyyy'
  // });

  // estilização dos ícones da navbar
  $('.eventos').css({
    'color': 'white',
    'font-size': '3rem',
    'text-shadow': '1px 1px 3px grey'
  });

});

