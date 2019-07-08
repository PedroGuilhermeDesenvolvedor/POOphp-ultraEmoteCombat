<?php 
	interface CRUD{
		public function insert($objetoInserido);
		public function get($chavePrimaria);
		public function getAll();
		public function update($objetoModificado);
		public function delete($objetoDeletado);
	}
?>