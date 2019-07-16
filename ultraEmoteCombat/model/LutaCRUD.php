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
		}
		//fim da função get.

		//inicio da função getAll.
		public function getAll (){
			$consulta = $this->conexao->prepare("select * from luta");
			$consulta->execute();
			$linha = $consulta->fetchall(PDO::FETCH_ASSOC);
			return $linha;

		}
		//fim da função getAll.

		//inicio da função update.
		public function update ($id){

		}
		//fim da função update.

		public function delete($id){

		}

	}
	//fim da classe LutadorCRUD.


?>