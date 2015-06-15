<?php

class Categoria{

	public $nome;
	public $descricao;

	public $conn;
	public $resultado;
	protected $tabela = 'categoria';


	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function cadastrar(){
		$sql = "INSERT INTO categoria (nome, descricao) VALUES ('$this->nome', '$this->descricao')";
		return mysqli_query($this->conn, $sql);
	}

	public function consultaTodas()
	{
		$sql = "SELECT * FROM $this->tabela";
		$this->resultado = mysqli_query($this->conn, $sql);

	}

	public function pegaUm()
	{
		return mysqli_fetch_assoc($this->resultado);
	}


	public function listar()
	{

	}

}
?>




