<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>
	
<?php 
	require_once "../model/lutaCRUD.php";
	require_once "../model/Luta.php";

	$desafiante = $_POST['desafiante'];
	$desafiado = $_POST['desafiado'];

	$lutaCRUD = new lutaCRUD();
	$luta = new Luta($desafiante, $desafiado);


	$lutaCRUD->insert($luta);
	header("location: ../view/index.php?acao=sucessoCadastroLuta");
?>
</pre>
</body>
</html>
