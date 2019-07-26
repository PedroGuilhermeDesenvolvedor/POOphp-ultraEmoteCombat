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
		//inicio da função insert.
		public function insert($lutador){
			$nome = $lutador->getNome();
			$nacionalidade = $lutador->getNacionalidade();
			$nascimento = $lutador->getNascimento();
			$idade = $lutador->getIdade();
			$altura = $lutador->getAltura();
			$peso = $lutador->getPeso();
			$categoria = $lutador->getCategoria();
			$habilidade = $lutador->getHabilidade();
			$apelido = $lutador->getApelido();

			$sql = "INSERT INTO 
			`lutador`
			VALUES 
			(DEFAULT,'$nacionalidade','$nascimento',$altura,$peso,'$categoria',DEFAULT, DEFAULT,DEFAULT,$habilidade,'$nome','$apelido')";
			$this->conexao->exec($sql);
		}
		//fim da função insert.

		//inicio da  função get.
		public function get($id){
			$consulta = $this->conexao->prepare("select * from lutador where id = $id");
			$consulta->execute();
			$linha = $consulta->fetch(PDO::FETCH_ASSOC);
			return $linha;
		}
		//fim da função get.

		//inicio da função getAll.
		public function getAll (){

		}
		//fim da função getAll.

		//inicio da função update.
		public function update ($lutador,$id){	
			$sql = "update lutador set 
            vitorias = '".$lutador->getVitorias()."', derrotas = '".$lutador->getDerrotas()."',empates = '".$lutador->getEmpates()."'
            where id = ".$id;
            $this->conexao->exec($sql);
		}
		//fim da função update.

		public function delete($id){

		}

	}
	//fim da classe LutadorCRUD.


?>