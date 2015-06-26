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

}


// class Subcategoria extends Model{
// 	public $tabela = 'subcategoria';

// 	public $nome;
// 	public $categoria;	
// }

?>




