<?php
	require_once "../model/LutadorCRUD.php";
	if //inicio da verificação isset. 
	(
		isset($_POST["nome"]) 
		AND isset($_POST["nacionalidade"]) 
		AND isset($_POST["nascimento"]) 
		AND isset($_POST["altura"]) 
		AND isset($_POST["peso"])
	)
	//fim da verificação isset.

	//inicio comando se isset é verdadeiro..
	{
		if 
		//inicio da verificação is_null.
		(
			!is_null($_POST["nome"]) 
			AND !is_null($_POST["nacionalidade"]) 
			AND !is_null($_POST["nascimento"]) 
			AND !is_null($_POST["altura"]) 
			AND !is_null($_POST["peso"])
		)
		//fim da verificação in_null.

		//inico do comando se is_null der negativo.
		{

		if 
			//inicio verificação empty.
			(
				!empty($_POST["nome"]) 
				AND !empty($_POST["nacionalidade"]) 
				AND !empty($_POST["nascimento"]) 
				AND !empty($_POST["altura"]) 
				AND !empty($_POST["peso"])
			//fim da verificação impty.
			)	

			//se empty der falso -> inicio cadastramento.
			{
				$lutador = new Lutador(
					$_POST["nome"],
					$_POST["nacionalidade"],
					$_POST["nascimento"],
					$_POST["altura"],
					$_POST["peso"]
				);
				$LutadorCRUID = new LutadorCRUD();
				var_dump($lutador);
				$LutadorCRUID->insert($lutador);
				 header("location: ../view/index.php?acao=sucessoCadastroLutador");
			}
			//fim cadastramento.
			else {
				//tratar para quando tiver empty.
			}

		}
		//fim do comando se is_null der negativo.
		else{
			echo "deu null";
		}
	}
	//fim do comando se isset for verdadeiro.
	else {
		echo "não ta  setado";
	}


?>