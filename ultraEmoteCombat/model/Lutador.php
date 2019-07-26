<?php 
	require_once "../interfaces/Controlador.php";
	//inicio da classe lutador
	class Lutador implements Controlador{
		//atributos.
		private $id;
		private $nome;
		private $nacionalidade;
		private $nascimento;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;
		private $habilidade;
		private $apelido;

		//MÉTODOS ESPECIAIS.

		//inicio do construct.
		public function __construct ($nome,$nacionalidade,$nascimento,$altura,$peso,$apelido){
			$this->setNome($nome);
			$this->setNacionalidade($nacionalidade);
			$this->setNascimento($nascimento);
			$this->setAltura($altura);
			$this->setPeso($peso);
			$this->setCategoria();
			$this->setVitorias(0);
			$this->setDerrotas(0);
			$this->setEmpates(0);
			$this->setApelido($apelido);

			$this->habilidade = ($this->getPeso() * 0.1) + $this->getIdade();
		}
		//fim do construct.

		//inicio dos getters e setters.
		public function getId() {
		    return $this->id;
		}
		 
		public function setId($id) {
		    $this->id = $id;
		}
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
		public function getNascimento() {
		    return $this->nascimento;
		}
		public function setNascimento($nascimento) {
		    $this->nascimento = $nascimento;
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
		public function setCategoria() {
			//inico testa a faixa de peso.
		    $peso = $this->peso;
		    if ($peso < 52.2){
		    	$this->categoria = "invalido";
		    }
		    elseif($peso <=70.3){
		    	$this->categoria = "L";
		    }
		    elseif($peso <=83.9){
		    	$this->categoria = "M";
		    }
		    elseif ($peso <= 120.2) {
		    	$this->categoria = "P";
		    }
		    else{
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
		public function getApelido() {
		    return $this->apelido;
		}
		 
		public function setApelido($apelido) {
		    $this->apelido = $apelido;
		}

		//inicio dos metodos da interface.

		//inicio da função getIdade
		public function getIdade(){
			$nascimento = explode('-', $this->nascimento);
			$anoAtual = date('Y');
			$idade = $anoAtual - $nascimento[0];
			return $idade;
			}
		//inicio da função ganharLuta.
		public function ganharLuta(){
			$this->setVitorias($this->getVitorias() + 1);
		}
		//fim da função ganharLuta.

		//inicio da função perderluta.
		public function perderLuta(){
			$this->setDerrotas($this->getDerrotas() + 1);
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