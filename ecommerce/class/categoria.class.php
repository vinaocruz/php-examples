<?php

class Categoria extends Model{

	public $nome;
	public $descricao;

	// public $conn;
	// public $resultado;
	public $tabela = 'categoria';

	/**
	 * Remove uma categoria
	 * @return boolean
	 */
	// public function remover()
	// {
	// 	$sql = "DELETE FROM $this->tabela WHERE $this->chave_primaria = :id";

	// 	$this->resultado = $this->conn->prepare($sql);
	// 	$this->resultado->bindValue(':id', $this->id);

	// 	return $this->resultado->execute();
	// }

}




