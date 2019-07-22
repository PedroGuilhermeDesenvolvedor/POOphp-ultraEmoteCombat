<?php 
	require_once "Lutador.php";
	//inico da class Luta.
	class Luta{
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $comentario;
		private $ganhador;

		//Métodos especiais.

		//inicio da função construct.
		public function __construct($desafiante,$desafiado){
			$this->setDesafiante($desafiante);
			$this->setDesafiado($desafiado);
		}
		//fim da função construct.

		public function getDesafiado() {
		    return $this->desafiado;
		}
		public function setDesafiado($desafiado) {
		    $this->desafiado = $desafiado;
		}
		public function getDesafiante() {
		    return $this->desafiante;
		}
		public function setDesafiante($desafiante) {
		    $this->desafiante = $desafiante;
		}
		public function getRounds() {
		    return $this->rounds;
		}
		private function setRounds($rounds) {
		    $this->rounds = $rounds;
		}
		public function getComentario() {
		    return $this->comentario;
		}
		 
		public function setComentario($comentario) {
		    $this->comentario = $comentario;
		}
		public function getGanhador() {
		    return $this->ganhador;
		}
		 
		public function setGanhador($ganhador) {
		    $this->ganhador = $ganhador;
		}

		//Inico métodos.

		//inicio da função marcarLuta.
		public function marcarLuta(Lutador $desafiante, Lutador $desafiado){
			if ($desafiante->getCategoria() == $desafiado->getCategoria() AND $desafiado != $desafiante){
				if ($desafiado->getPeso() != "invalido"){
					$this->setDesafiante($desafiante);
					$this->setDesafiado($desafiado);
				}
				else {
					echo "Algum lutador está com o peso invalido! Luta não pode acontecer";
				}
			}
			else {
				echo "Só podem lutar lutadores da mesma categoria de peso e que sejam lutadores diferentes";
			}
		}
		//fim da função marcarLuta.

		//inico da função lutar.
		public function lutar(){
			$sorte = rand(0,10);

			$habilidadeANT = ($this->desafiante->getPeso() * 0.1) + $this->desafiante->getIdade() + $this->desafiante->getHabilidade();

			$habilidadeADO = ($this->desafiado->getPeso() * 0.1) + $this->desafiado->getIdade() + $this->desafiado->getHabilidade();

			if (($this->desafiante->getDerrotas() != 0) AND $this->desafiado->getDerrotas() != 0){
				$historicoANT = $this->desafiante->getVitorias() / $this->desafiante->getDerrotas();
				$historicoADO = $this->desafiado->getVitorias() / $this->desafiado->getDerrotas();
			}
			else {
				$historicoANT = 0;
				$historicoADO = 0;
			}
			if (
				(($habilidadeANT * 0.3) + (rand(0,30) * 0.3) + ($historicoANT * 0.4))
				<
				(($habilidadeADO * 0.3) + (rand(0,30) * 0.3) + ($historicoADO * 0.4))
			){
				$this->desafiante->ganharLuta();
				$this->setGanhador($this->desafiante);
				$this->desafiado->perderLuta();
			}
			elseif(
				(($habilidadeANT * 0.3) + (rand(0,30) * 0.3) + ($historicoANT * 0.4))
				>
				(($habilidadeADO * 0.3) + (rand(0,30) * 0.3) + ($historicoADO * 0.4))
			){
				$this->desafiado->ganharLuta();
				$this->setGanhador($this->desafiado);
				$this->desafiante->perderLuta();
			}
			else {
				$this->desafiante->empatarLuta();
				$this->setGanhador(null);
				$this->desafiado->empatarLuta();
			}
		}
		//fim da função lutar.
	}
	//fim da class Luta.
 ?>