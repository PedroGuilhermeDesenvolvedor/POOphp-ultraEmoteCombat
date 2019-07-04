<!DOCTYPE html>
<html>
<head>
	<title>Ultra-Emote-Combat</title>
</head>
<body>
	<pre>
	<?php 
		require_once "Lutador.php";
		require_once "Luta.php";

		$prettyBoy = new Lutador("Pretty Boy","frança","31","1.75","68.9");
		print_r($prettyBoy);
		$pedro = new Lutador("Pedro o Forte","Brasileiro","18","1.60","70");
		$pedro->treinar();

		echo "\n";
		echo "\n";
		echo "\n";
		echo "\n";
		echo "\n";
		print_r($pedro);

		$brigaDeGalo = new Luta();

		$brigaDeGalo->marcarLuta($prettyBoy, $pedro);

		$brigaDeGalo->lutar();

		print_r($brigaDeGalo);
	 ?>
	 </pre>
</body>
</html>