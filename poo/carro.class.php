<?php


class Carro{

	//atributos
	public $velocidade;
	public $qnt_portas;
	public $cor;

	function __construct($qnt)
	{
		$this->qnt_portas = $qnt;
		echo "Iniciando motor de carro com ".$this->qnt_portas." portas";
	}

	function __destruct()
	{
		echo "Finalizando objeto";
	}

	//métodos
	public function acelerar($vel){
		$this->velocidade+= $vel;
		echo "Carro está acelerando a $vel...";
	}

	public function frear()
	{
		echo "Carro está freando...";
	}

}