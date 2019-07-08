<?php 
	require_once "conexao.php";
	require_once "Lutador.php";
	//inicio da classe LutadorCRUD.
	class LutadorCRUD {
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
	}
	//fim da classe LutadorCRUD.


?>