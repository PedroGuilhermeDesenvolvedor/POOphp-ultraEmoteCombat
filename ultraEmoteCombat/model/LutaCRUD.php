<?php 
	require_once "conexao.php";
	require_once "Lutador.php";
	require_once "../interfaces/CRUD.php";	
	//inicio da classe lutaCRUD.
	class lutaCRUD implements CRUD {
		private $conexao;

		public function __construct(){
			$this->conexao = conexao::getConexao();
		}
		//inicio da função insert.
		public function insert($luta){
			$desafiante = $luta->getDesafiante();
			$desafiado  = $luta->getDesafiado();

			$sql = "INSERT INTO 
			`luta`
			VALUES 
			(DEFAULT,'$desafiado','$desafiante',null,null,null)";
			
			$this->conexao->exec($sql);
		}
		//fim da função insert.

		//inicio da  função get.
		public function get($id){
			$consulta = $this->conexao->prepare("select * from luta where id = $id");
			$consulta->execute();
			$linha = $consulta->fetchall(PDO::FETCH_ASSOC);
			return $linha;

		}
		//fim da função get.

		public function getLutasMarcadas (){
			$desafiantes = array();
			$desafiados = array();
			$nomesDesafiantes = array();
			$nomesDesafiados  = array();
			$resultado = array();
			$consulta = $this->conexao->prepare("select id, ganhador, desafiante, desafiado from luta");
			$consulta->execute();
			$linha = $consulta->fetchall(PDO::FETCH_ASSOC);
			$contador = count($linha);	
			for ($i = 0; $i < $contador;$i++){
				if ($linha[$i]['ganhador'] != null){
				}
				else {
					$desafiantes[] = $linha[$i]['desafiante'];
					$desafiados[]  = $linha[$i]['desafiado'];
					$id[]          = $linha[$i]['id'];
				}	
			}
			$historico[0] = $desafiantes;
			$historico[1] = $desafiados;
			$contadorAux = count($historico[0]);

			for ($p = 0;$p < $contadorAux; $p++){

			$trinta = $historico[0][$p];
			$sql = "select lutador.nome from lutador, luta where $trinta = lutador.id group by lutador.nome";
			$consulta = $this->conexao->prepare($sql);
			$consulta->execute();
			$linha = $consulta->fetchall(PDO::FETCH_ASSOC);
			$nomesDesafiados[] = $linha[0]['nome'];
			}

			$contadorAux = count($historico[1]);

			for ($k = 0;$k < $contadorAux; $k++){

			$trinta = $historico[1][$k];
			$sql = "select lutador.nome from lutador, luta where $trinta = lutador.id group by lutador.nome";
			$consulta = $this->conexao->prepare($sql);
			$consulta->execute();
			$linha = $consulta->fetchall(PDO::FETCH_ASSOC);
			$nomesDesafiantes[] = $linha[0]['nome'];
			}
			$resultado['desafiados']  = $nomesDesafiados;
			$resultado['desafiantes'] = $nomesDesafiantes;
			$resultado['id']		  = $id;

			return $resultado;
	
		}


		//inicio da função getAll.
		public function getAll (){
			$consulta = $this->conexao->prepare("select * from luta");
			$consulta->execute();
			$linha = $consulta->fetchall(PDO::FETCH_ASSOC);
			return $linha;

		}
		//fim da função getAll.

		//inicio da função update.
		public function update ($idGanhador,$idLuta){
			$sql = "update luta set 
            ganhador = '".$idGanhador."'
            where id = ".$idLuta;
            $this->conexao->exec($sql);

		}
		//fim da função update.

		public function delete($id){

		}

	}
	//fim da classe LutadorCRUD.


?>