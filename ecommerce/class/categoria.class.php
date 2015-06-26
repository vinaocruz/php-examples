<?php

class Categoria extends Model{

	public $nome;
	public $descricao;

	// public $conn;
	// public $resultado;
	public $tabela = 'categoria';

	public function cadastrar($dados)
	{
		$sql = "INSERT INTO $this->tabela (nome, descricao) VALUES (:nome, :descricao)";

		$this->resultado = $this->conn->prepare($sql);

		$this->resultado->bindValue(':nome', $this->nome);
		$this->resultado->bindValue(':descricao', $this->descricao);

		return $this->resultado->execute();
	}

	/**
	 * Remove uma categoria
	 * @return boolean
	 */
	public function remover()
	{
		$sql = "DELETE FROM $this->tabela WHERE id = :id";

		$this->resultado = $this->conn->prepare($sql);
		$this->resultado->bindValue(':id', $this->id);

		return $this->resultado->execute();
	}

}


// class Subcategoria extends Model{
// 	public $tabela = 'subcategoria';

// 	public $nome;
// 	public $categoria;	
// }

?>




