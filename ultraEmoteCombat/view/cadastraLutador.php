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

  <script>
  $(document)
    .ready(function() {

      //Faz o menu ficar interativo com o mause.
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;
  </script>
</head>
<body>  
   <div class="ui inverted vertical masthead center aligned segment">
      <?php 
  include ("menu.php");
   ?>
      <form name="form" action="../controller/cadastramentoBanco.php" method="post" class="ui form segment" onSubmit="return validar(); ">
        <div class="ui pointing red basic label">
          Cadastre o seu lutador!
        </div>
        <div class="three fields">
          <div class=" field">
            <label>Nome</label>
            <input id="nome" name="nome" type="text">
          </div>
          <div class=" field">
            <label>Nacionalidade</label>
            <input id="nacionalidade" name="nacionalidade" type="text">
          </div>
          <div class=" field">
            <label>Data De Nascimento</label>
            <input id="nascimento" name="nascimento" type="date">
          </div>
        </div>
        <div class="three fields">
          <div class=" field">
            <label>Altura</label>
            <input id="altura" type="number" step="0.01" name="altura">
          </div>
          <div class=" field">
            <label>Peso</label>
            <input id="peso" type="number" name="peso">
          </div>
          <div class=" field">
            <label>Apelido</label>
            <input id="apelido" type="text" name="apelido">
          </div>
        </div>
        <div class=" field">
        </div>
        <button type="submit" class="ui button green">
          Cadastrar Campeão
        </button>
      </form>
  </div>
  <script type="text/javascript">
    function validar() {     
      var nome = document.getElementById("nome");
      var nacionalidade = document.getElementById("nacionalidade");
      var nascimento = document.getElementById("nascimento");
      var altura = document.getElementById("altura");
      var peso = document.getElementById("peso");
      var apelido = document.getElementById("apelido");

        //inicio da verificação para saber se é NULL.
        if (nome.value == "") {
          alert('Nome deve estar preenchido!');
          document.form.nome.focus();
          return false;
        }
        if (apelido.value == "") {
          alert('Apelido deve estar preenchido!');
          document.form.nome.focus();
          return false;
        }
        if (nacionalidade.value == "") {
          alert('nacionalidade deve estar preenchida!');
          document.form.nacionalidade.focus();
          return false;
        }
        if (nascimento.value == "") {
          alert('Data de nascimento deve estar preenchido!');
          document.form.nascimento.focus();
          return false;
        }
        if (altura.value == "") {
          alert('Altura deve estar preenchido!');
          document.form.altura.focus();
          return false;
        }
        if (peso.value == "") {
          alert('Peso deve estar preenchido!');
          document.form.peso.focus();
          return false;
        }
        //Fim da verificação para saber se é NULL.

        //inico da verificação para saber se esta no tamanho correto.
        if (apelido.value.length >= 10) {
          alert('Apelido deve ter menos de 10 caracteres!');
          document.form.nome.focus();
          return false;
        }
        //fim da verificação para saber se esta no tamanho correto.
        }
</script>
</html>
