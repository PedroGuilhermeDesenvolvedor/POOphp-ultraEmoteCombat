<form id="formularioLutador" action="../controller/cadastramentoBanco.php" method="post" class="ui form segment">
  <div class="ui pointing red basic label">
    Cadastre o seu lutador!
  </div>  
  <div class="ui three column grid container">
    <div class="column">
      <div class="two fields">
        <div class=" field">
          <label for="nome">Nome</label>
          <input id="nome" name="nome" type="text" required="nome">
        </div>
        <div class=" field">
          <label for="nome">Nacionalidade</label>
          <input id="nacionalidade" name="nacionalidade" type="text" required="nome">
        </div>
      </div>
    </div>
    <div class="column">
      <div class="two fields">
        <div class=" field">
          <label for="date">Data De Nascimento</label>
          <input id="nascimento" name="nascimento" type="date" required="date">
        </div>
        <div class=" field">
          <label for="number">Altura</label>
          <input id="altura" type="number" step="0.01" name="altura" required="number">
        </div>
      </div>
    </div>
    <div class="two fields">
      <div class="column">
        <div class=" field">
          <label for="number">Peso</label>
          <input id="peso" type="number" name="peso" required="number">
        </div>
        <div class=" field">
          <label for="nome">Apelido</label>
          <input id="apelido" type="text" name="apelido" required="nome">
        </div>
      </div>
    </div>
  </div>
  <button type="submit" class="ui button green">
    Cadastrar Campeão
  </button>
</form>





