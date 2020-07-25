$(document).ready(function () {
  
  var maxHeight = 0;

  $(".card").each(function () {
    if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
  });

  $(".card").height(maxHeight + 60);

  $('.modal').modal();

  $('.tooltipped').tooltip({ delay: 50 });

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
    }
  });

  $(".edit").click(function () {
    var tituloName = $(this).attr('name') + "titulo"
    var descricaoName = $(this).attr('name') + "descricao"
    var titulo = $('h5[name="' + tituloName + '"]').text()
    var descricao = $('p[name="' + descricaoName + '"]').text()
    var id = $(this).attr('name')


    $.post("/solidariedade/edit", { id: id, descricao: descricao, titulo: titulo }, function (data) {
      console.log(data);
      //location.reload();
    })


  })

  $(".delete").click(function () {
    var id = $(this).attr('name')


    $.post("/solidariedade/delete", { id: id }, function (data) {
      console.log(data);
      location.reload();
    })


  })

});
