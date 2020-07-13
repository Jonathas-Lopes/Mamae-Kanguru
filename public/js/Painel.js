$(document).ready(function () {
  $('.modal').modal();

  var maxHeight = 0;

  $(".card-panel").each(function () {
    if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
  });

  $(".card-panel").height(maxHeight + 60);

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
    }
  });

  $(".edit").click(function () {
    var tituloName = $(this).attr('name')+"titulo"
    var descricaoName = $(this).attr('name')+"descricao"
    var titulo = $('span[name="'+tituloName+'"]').text()
    var descricao = $('p[name="'+descricaoName+'"]').text()
    var id = $(this).attr('name')


    $.post("/painel/edit", { id: id, descricao: descricao, titulo: titulo},function( data ) {
      console.log(data);
    })
    

  })


});