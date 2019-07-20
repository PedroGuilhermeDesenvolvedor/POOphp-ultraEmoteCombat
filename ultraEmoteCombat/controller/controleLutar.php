<?php  
	require_once "../model/lutaCRUD.php";
	$lutaCRUD = new lutaCRUD();
	$nomes = $lutaCRUD->getLutasMarcadas();
 

 ?>
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
          <td></td>
          <td></td>
          <td class="right aligned"></td>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td class="right aligned"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="column">
      <a class="ui grey massive label">Lutas Marcadas</a>
    <table class="ui selectable inverted table">
      <tbody>
        <tr>
          <td><?php echo $nomes['desafiantes'][0]; ?></td>
          <td><?php echo $nomes['desafiados'][0]; ?></td>
          <td class="right aligned"><a class="ui red button" href="../controller/lutar.php?lutar=3">Lutar</a></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="right aligned"><a class="ui red button">Lutar</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>







