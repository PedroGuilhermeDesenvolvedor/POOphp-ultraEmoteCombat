<?php 
	require_once "../model/Luta.php";
	require_once "../model/lutaCRUD.php";
	require_once "../model/Lutador.php";
	require_once "../model/LutadorCRUD.php";
	
	$lutaCRUD = new lutaCRUD();
	$luta = $lutaCRUD->get($_GET['lutar']);
	

	$lutadorCRUD = new LutadorCRUD();

	$idDesafiante = $luta[0]["desafiante"];
	$desafiante = $lutadorCRUD->get($idDesafiante);

	$desafiante = new Lutador($desafiante['nome'],$desafiante['nacionalidade'],$desafiante['nascimento'], $desafiante['altura'],$desafiante['peso'],$desafiante['apelido']);

	$idDesafiado = $luta[0]["desafiado"];
	$desafiado = $lutadorCRUD->get($idDesafiado);

	$desafiado = new Lutador($desafiado['nome'],$desafiado['nacionalidade'],$desafiado['nascimento'], $desafiado['altura'],$desafiado['peso'],$desafiado['apelido']);


	$luta = new Luta($desafiante, $desafiado);


	$luta->lutar();
	//update ganhador
	$lutadorCRUD->update($desafiante,$idDesafiante);
	$lutadorCRUD->update($desafiado,$idDesafiado);

	if (is_null($luta->getGanhador())){

	}
	else{
		$nomeGanhador = $luta->getGanhador();
		$nomeGanhador = $nomeGanhador->getNome();
		if ($desafiante->getNome() == $nomeGanhador){
			$lutaCRUD->update($idDesafiante,$_GET["lutar"]);
		}
		else {
			$lutaCRUD->update($idDesafiado,$_GET["lutar"]);
		}
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		
		<?php print_r($luta); ?>
	</pre>

</body>
</html>


