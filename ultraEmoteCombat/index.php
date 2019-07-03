<!DOCTYPE html>
<html>
<head>
	<title>Ultra-Emote-Combat</title>
</head>
<body>
	<?php 
		require_once "Lutador.php";

		$prettyBoy = new Lutador("Pretty Boy","frança","31","1.75","68.9");
		echo "\n";
		$prettyBoy->apresentar();
		echo "\n";
		$prettyBoy->ganharLuta();
		echo "\n";
		$prettyBoy->setPeso(100);


		print_r($prettyBoy);


	 ?>
</body>
</html>