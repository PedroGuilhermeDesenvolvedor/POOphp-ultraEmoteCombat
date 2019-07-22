<?php 
	interface CRUD{
		public function insert($objetoInserido);
		public function get($chavePrimaria);
		public function getAll();
		public function update($objetoModificado,$id);
		public function delete($objetoDeletado);
	}
?>