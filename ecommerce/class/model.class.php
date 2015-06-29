<?php

abstract class Model{
	public $conn;
	public $resultado;
	public $tabela;

	public $chave_primaria = 'id';

	function __construct($conn)
	{
		$this->conn = $conn;
		// $this->conn = new PDO();
	}

	// abstract public function getNome(){}

	public function consultaTodos()
	{
		$sql = "SELECT * FROM " . $this->tabela;

		// $this->resultado = mysqli_query($this->conn, $sql);
		$this->resultado = $this->conn->prepare($sql);
		return $this->resultado->execute();
	}

	public function pegaUm()
	{
		// return mysqli_fetch_assoc($this->resultado);
		return $this->resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function pegaTodos(){
		return $this->resultado->fetchAll();
	}

	public function cadastrar($dados){
		// $dados = array(
		// 	'nome' => 'TI',
		// 	'descricao' => 'Teste',
		// 	'data' => '2015'
		// );

		$indices = array_keys($dados); //array('nome','descricao', 'data')
		$campos = implode(", ", $indices); //nome, descricao, data

		$valores = implode("', '", $dados); //TI', 'Teste', '2015
		

		$sql = "INSERT INTO $this->tabela ($campos) VALUES ('$valores')";
		// INSERT INTO categoria (nome, descricao, data) VALUES ('TI', 'Teste', '2015')

		return mysqli_query($this->conn, $sql);
	}

	public function remover()
	{
		$sql = "DELETE FROM $this->tabela WHERE $this->chave_primaria = :id";

		$this->resultado = $this->conn->prepare($sql);
		$this->resultado->bindValue(':id', $this->id);

		return $this->resultado->execute();
	}


}