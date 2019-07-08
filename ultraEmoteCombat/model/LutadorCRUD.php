<?php 
	require_once "conexao.php";
	require_once "Lutador.php";
	require_once "../interfaces/CRUD.php";	
	//inicio da classe LutadorCRUD.
	class LutadorCRUD implements CRUD {
		private $conexao;

		public function __construct(){
			$this->conexao = conexao::getConexao();
		}

		//inicio da função inset.
		public function insert(Lutador $lutador){
			$nome = $lutador->getNome();
			$nacionalidade = $lutador->getNacionalidade();
			$nascimento = $lutador->getNascimento();
			$idade = $lutador->getIdade();
			$altura = $lutador->getAltura();
			$peso = $lutador->getPeso();
			$categoria = $lutador->getCategoria();
			$habilidade = $lutador->getHabilidade();

			$sql = "INSERT INTO 
					`lutador`
					VALUES 
					(DEFAULT,'$nacionalidade','$nascimento',$altura,$peso,'$categoria',DEFAULT, DEFAULT,DEFAULT,$habilidade,'$nome')";
			$this->conexao->exec($sql);
		}
		//fim da função insert.

		//inicio da  função get.
		public function get($id){

		}
		//fim da função get.

		//inicio da função getAll.
		public function getAll (){

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