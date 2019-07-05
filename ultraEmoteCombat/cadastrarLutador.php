<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="semantic/semantic.css">
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="semantic/semantic.js"></script>
  <script type="text/javascript" src="semantic/components/dropdown.js"></script>
  <link rel="stylesheet" type="text/css" href="semantic/components/dropdown.css">
  <script type="text/javascript" src="script.js"></script>
  <meta charset="utf-8" />
  <style type="text/css">
    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
  </style>
</head>
<body>
  <div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">
      <form action="validador.php" method="post" class="ui form segment">
        <div class="ui pointing red basic label">
          Cadastre o seu lutador!
        </div>
        <div class="two fields">
          <div class=" field">
            <label>Nome</label>
            <input name="nome" type="text">
          </div>
          <div class=" field">
            <label>Nacionalidade</label>
            <input name="nacionalidade" type="text">
          </div>
        </div>
        <div class="two fields">
          <div class=" field">
            <label>Idade</label>
            <input type="number" name="idade">
          </div>
          <div class=" field">
            <label>Altura</label>
            <input type="number" name="altura">
          </div>
        </div>
        <div class=" field">
        </div>
        <a href="validador.php" class="ui button green">Cadastrar o campeão</a>
      </form>
    </div>
  </div>	
</body>

</html>
