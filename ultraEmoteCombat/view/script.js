$(document).ready(function() {
  $('#formularioLutador').css("display","none")
  $('#formularioLuta').css("display","none")

  $('#cadastraLutador').click(function(){
      $.post('CadastrarLutador.php', function (retorna) {
        $("#corpoIndex").html(retorna);

      });
      $('#formularioLuta').css("display","none")
    });
  $('#marcarLuta').click(function(){
      $.post('MarcarLuta.php', function (retorna) {
        $("#corpoIndex").html(retorna);
      });
    });
  $('#lutar').click(function(){
      $.post('../controller/controleLutar.php', function (retorna) {
        $("#corpoIndex").html(retorna);

      });
      $('#formularioLutador').css("display","none")
      $('#formularioLuta').css("display","none")
    });
});