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
	$desafiado = $lutadorCRUD->get($idDesafiante);

	$desafiado = new Lutador($desafiado['nome'],$desafiado['nacionalidade'],$desafiado['nascimento'], $desafiado['altura'],$desafiado['peso'],$desafiado['apelido']);


	$luta = new Luta($desafiante, $desafiado);

	$luta->lutar();
	//update ganhador
	$lutadorCRUD->update($desafiante,$idDesafiante);
	$lutadorCRUD->update($desafiado,$idDesafiado);

	$empates = $luta->getGanhador();
	if ($desafiante->getEmpates() == $empates->getEmpates()){
		echo "não empatou";

	}
	else{
		echo "empatou";
	}







	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		
		<?php 	print_r($luta); ?>
	</pre>

</body>
</html>