<?php

class Circulo
{
	public static $pi = 3.14;

	public static function getPi()
	{
		echo self::$pi;
	}
}

// Circulo::getPi();

// Circulo::$pi = 678;
// echo Circulo::$pi;

class DateHelper{

	public static function converteEntoPtbr($dateEn){
		//conversão
		return date('d/m/Y', strtotime($dateEn));

	}

	public static function convertePtbrToEn($datePtbr){
		//conversao
		return implode('-', array_reverse(explode('/', $datePtbr)));
	}

}



"INSERT INTO cliente (nome, data_nascimento) VALUES ('$nome', ".DateHelper::convertePtbrToEn($data).")"






