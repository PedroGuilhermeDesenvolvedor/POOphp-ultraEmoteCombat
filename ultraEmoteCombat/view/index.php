<!DOCTYPE html>
<html>
  <head>
    <title>Pagina inicial</title>
    <script type="text/javascript" src="../jquery.js" ></script>
    <link rel="stylesheet" type="text/css" href="semantic/semantic.css">
    <script type="text/javascript" src="semantic/semantic.js"></script>
    <script type="text/javascript" src="semantic/components/dropdown.js"></script>
    <link rel="stylesheet" type="text/css" href="semantic/components/dropdown.css">
    <script type="text/javascript" src="script.js"></script>
    <meta charset="utf-8" />
    <style type="text/css">
      #tabelaLutar {

      }
      .masthead.segment {
        min-height: 700px;
        padding: 1em 0em;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#formularioLutador').css("display","none")
        $('#formularioLuta').css("display","none")

        $('#cadastraLutador').click(function(){
            $('#formularioLuta').css("display","none")
            $('#tabelaLutar').css("display","none")
            $('#formularioLutador').css("display","block")
            $('#formularioLutador').appendTo('#menuEcorpo');
          });
        $('#marcarLuta').click(function(){
            $('#formularioLutador').css("display","none")
            $('#tabelaLutar').css("display","none")
            $('#formularioLuta').css("display","block")
            $('#formularioLuta').appendTo('#menuEcorpo');
          });
        $('#lutar').click(function(){
            $.post('../controller/controleLutar.php', function (retorna) {
              $("#guardaLutar").html(retorna);

            });
            $('#formularioLutador').css("display","none")
            $('#formularioLuta').css("display","none")
          });
      });
    </script>
  </head> 
  <body>
    <div id="menuEcorpo" class="ui inverted vertical masthead center aligned segment">
      <div class="pusher">
        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
            <div class="left item">
              <a href="index.php" class="ui inverted button withe">Página Inicial</a>
              <a  id="marcarLuta" class="ui inverted button yellow">Marcar luta</a>
              <a id="lutar" class="ui inverted button red">Lutar</a>
            </div>
            <div class="right item">
              <a id="cadastraLutador" class="ui inverted button green">Cadastrar Lutador</a>
            </div>
          </div>
        </div>
      </div> 
      <div id="guardaLutar">
        

      </div>
    </div>
  </body>
  </html>
  </div>
  <form id="formularioLuta" action="../controller/cadastramentoLuta.php" method="post" class="ui form segment">
    <div class="ui pointing red basic label">
      Marque a sua luta!
    </div>
    <div class=" field">
      <label for="nome">Desafiado: </label>
      <input type=text name="desafiado" required=nome/>
    </div>
    <div class=" field">
      <label for="nome">Desafiante</label>
      <input type="text" name="desafiante" required="nome">
    </div>
    <button type="submit" class="ui button green">
      Marcar luta!
    </button>
  </form>

  <form id="formularioLutador" action="../controller/cadastramentoBanco.php" method="post" class="ui form segment">
    <div class="ui pointing red basic label">
      Cadastre o seu lutador!
    </div>
    <div class="three fields">
      <div class=" field">
        <label for="nome">Nome</label>
        <input id="nome" name="nome" type="text" required="nome">
      </div>
      <div class=" field">
        <label for="nome">Nacionalidade</label>
        <input id="nacionalidade" name="nacionalidade" type="text" required="nome">
      </div>
      <div class=" field">
        <label for="date">Data De Nascimento</label>
        <input id="nascimento" name="nascimento" type="date" required="date">
      </div>
    </div>
    <div class="three fields">
      <div class=" field">
        <label for="number">Altura</label>
        <input id="altura" type="number" step="0.01" name="altura" required="number">
      </div>
      <div class=" field">
        <label for="number">Peso</label>
        <input id="peso" type="number" name="peso" required="number">
      </div>
      <div class=" field">
        <label for="nome">Apelido</label>
        <input id="apelido" type="text" name="apelido" required="nome">
      </div>
    </div>
    <button type="submit" class="ui button green">
      Cadastrar Campeão
    </button>
  </form>
</html>


