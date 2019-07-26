<div class="ui three column grid container">
  <div class="column">
    <p></p>
    <p></p>
  </div>
  <div class="column">
    <form id="formularioLuta" action="../controller/cadastrarLuta.php" method="post" class="ui form segment">
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
  </div>
  <div class="column">
    <p></p>
    <p></p>
  </div>
</div>