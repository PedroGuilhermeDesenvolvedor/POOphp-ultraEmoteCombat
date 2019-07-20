<div id="tabelaLutar" class="ui two column grid container">
  <div class="column">
      <a class="ui grey massive label">Histórico de lutas</a>
      <table class="ui selectable inverted table">
      <tbody>
        <tr class="active">
          <td>Desafiante</td>
          <td>Desafiado</td>
          <td class="right aligned">Ganhador</td>
        </tr>

        <tr>
          <td> Lutador <?php echo $lutas[0]['desafiado']; ?></td>
          <td><?php echo $lutas[0]['desafiante']; ?></td>
          <td class="right aligned"><?php echo $lutas[0]['ganhador'];?></td>
        </tr>

        <tr>
          <td><?php echo $lutas[1]['desafiado']; ?></td>
          <td><?php echo $lutas[1]['desafiante']; ?></td>
          <td class="right aligned"><?php echo $lutas[1]['ganhador'];?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="column">
      <a class="ui grey massive label">Lutas Marcadas</a>
    <table class="ui selectable inverted table">
      <tbody>
        <tr>
          <td><?php echo $lutas[3]['desafiado']; ?></td>
          <td><?php echo $lutas[3]['desafiante']; ?></td>
          <td class="right aligned"><a class="ui red button" href="../controller/lutar.php?lutar=3">Lutar</a></td>
        </tr>
        <tr>
          <td><?php echo $lutas[5]['desafiado']; ?></td>
          <td><?php echo $lutas[5]['desafiante']; ?></td>
          <td class="right aligned"><a class="ui red button" href="../controller/lutar.php?lutar=<?php echo $lutas[0]["id"]; ?>">Lutar</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
 