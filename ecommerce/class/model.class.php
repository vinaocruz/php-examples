<?php
/**
 * Classe abstrata para modelos do sistema
 */
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

	/**
	 * Consulta todos os registro do model
	 */
	public function consultaTodos()
	{
		$sql = "SELECT * FROM " . $this->tabela;

		// $this->resultado = mysqli_query($this->conn, $sql);
		$this->resultado = $this->conn->prepare($sql);
		return $this->resultado->execute();
	}

	/**
	 * Retorna um elemento do resultado da consulta
	 */
	public function pegaUm()
	{
		// return mysqli_fetch_assoc($this->resultado);
		return $this->resultado->fetch(PDO::FETCH_ASSOC);
	}

	/**
	 * Retorna um array com todos os elementos da consulta
	 */
	public function pegaTodos(){
		return $this->resultado->fetchAll();
	}

	/**
	 * Insere um determinado registro, de acordo com itens composto em array
	 * @param Array $dados
	 */
 	public function cadastrar($dados){
		// $dados = array(
		// 	'nome' => 'TI',
		// 	'descricao' => 'Teste',
		// 	'data' => '2015'
		// );

		$indices = array_keys($dados); //array('nome','descricao', 'data')
		$campos = implode(", ", $indices); //nome, descricao, data

		$marcadores = ':'.implode(", :", $indices); //:nome, :descricao, :data
		// $valores = implode("', '", $dados); //TI', 'Teste', '2015
		

		$sql = "INSERT INTO $this->tabela ($campos) VALUES ('$marcadores')";
		// INSERT INTO categoria (nome, descricao, data) VALUES (:nome, :descricao, :data)

		$this->resultado = $this->conn->prepare($sql);
		foreach($dados as $key => $value){
			$this->resultado->bindValue(":$key", $value);
		}
		return $this->resultado->execute();
		// return mysqli_query($this->conn, $sql);
	}

	/**
	 * Remove um elemento do banco por ID
	 */
	public function remover()
	{
		$sql = "DELETE FROM $this->tabela WHERE $this->chave_primaria = :id";

		$this->resultado = $this->conn->prepare($sql);
		$this->resultado->bindValue(':id', $this->id);

		return $this->resultado->execute();
	}

}