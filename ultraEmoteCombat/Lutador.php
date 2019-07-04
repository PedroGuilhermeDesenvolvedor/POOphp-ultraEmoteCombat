<?php 
	require_once "Controlador.php";
	//inicio da classe lutador
	class Lutador implements Controlador{
		//atributos.
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;
		private $habilidade;

		//MÉTODOS ESPECIAIS.

		//inicio do construct.
		public function __construct ($nome,$nacionalidade,$idade,$altura,$peso){
			$this->setNome($nome);
			$this->setNacionalidade($nacionalidade);
			$this->setIdade($idade);
			$this->setAltura($altura);
			$this->setPeso($peso);
			$this->setCategoria();
			$this->setVitorias(0);
			$this->setDerrotas(0);
			$this->setEmpates(0);
			$this->habilidade = ($this->getPeso() * 0.1) + $this->getIdade();
		}
		//fim do construct.

		//inicio dos getters e setters.
		public function getNome() {
		    return $this->nome;
		}
		public function setNome($nome) {
		    $this->nome = $nome;
		}
		public function getNacionalidade() {
		    return $this->nacionalidade;
		}
		public function setNacionalidade($nacionalidade) {
		    $this->nacionalidade = $nacionalidade;
		}
		public function getIdade() {
		    return $this->idade;
		}
		public function setIdade($idade) {
		    $this->idade = $idade;
		}
		public function getAltura() {
		    return $this->altura;
		}
		public function setAltura($altura) {
		    $this->altura = $altura;
		}
		public function getPeso() {
		    return $this->peso;
		}
		public function setPeso($peso) {
		    $this->peso = $peso;
		    $this->setCategoria();
		}
		public function getCategoria() {
		    return $this->categoria;
		}
		//inicio da função setCategoria
		private function setCategoria() {
			//inico testa a faixa de peso.
		    $peso = $this->peso;
		    if ($peso < 52.2){
		    	echo "Peso abaixo do permitido!";
		    	$this->categoria = "invalido";
		    }
		    elseif($peso <=70.3){
		    	$this->categoria = "Leve";
		    }
		    elseif($peso <=83.9){
		    	$this->categoria = "Médio";
		    }
		    elseif ($peso <= 120.2) {
		    	$this->categoria = "Pesado";
		    }
		    else{
				echo "Peso acima do permitido!";
				$this->categoria = "invalido";
		    }
		    //fim testa a faixa de peso.
		}
		//fim da função getCategoria
		public function getVitorias() {
		    return $this->vitorias;
		}
		public function setVitorias($vitorias) {
		    $this->vitorias = $vitorias;
		}
		public function getDerrotas() {
		    return $this->derrotas;
		}
		public function setDerrotas($derrotas) {
		    $this->derrotas = $derrotas;
		}
		public function getEmpates() {
		    return $this->empates;
		}
		public function setEmpates($empates) {
		    $this->empates = $empates;
		}
		public function getHabilidade() {
		    return $this->habilidade;
		}
		public function setHabilidade($habilidade) {
		    $this->habilidade = $habilidade;
		}

		//inicio dos metodos da interface.

		//inicio da função apresentar.
		public function apresentar(){
			echo "E agora... Diratamente do ". $this->getNacionalidade() . " pesando " . $this->getPeso() . " kilos, com ". $this->getVitorias() . " vitórias e " . $this->getDerrotas() . " derrotas. Na categoria " . $this->getCategoria() . " 	com " . $this->getIdade() . " anos. ELEEEE " . $this->getNome();
		}
		//fim da função apresentar.

		//inicio da função status.
		public function status(){
			echo "O lutador " . $this->getNome() . "ganhou " . $this->getVitorias() . "lutas, perdeu " . $this->getDerrotas() . " e empatou " . $this->getEmpates() . " lutas."; 
		}
		//fim da função status.

		//inicio da função ganharLuta.
		public function ganharLuta(){
			$this->setVitorias($this->getVitorias() + 1);
		}
		//fim da função ganharLuta.

		//inicio da função perderluta.
		public function perderLuta(){
			$this->setVitorias($this->getVitorias() - 1);
		}
		//fim da função perderluta.

		//inicio da função empatarLuta.
		public function empatarLuta(){
			$this->setEmpates($this->getEmpates() + 1);

		}
		//fim da função empatarLuta.

		//inico da função treinar
		public function treinar(){
			$this->setHabilidade($this->getHabilidade() + 1);
			$this->setPeso($this->getPeso() - 0.5);
		}
		//fim da função treinar



	}
	//fim da classe lutador.
	

?>