<?php

class Circulo{

	const PI = 3.14;

}

echo Circulo::PI;

define('TIPO_CLIENTE', 'C');

class Usuario{

	const TIPO_CLIENTE = 'C';
	const TIPO_ADMIN = 'A';

}


"INSERT INTO cliente (login, senha, tipo) VALUES ('$login', '$senha', '".Usuario::TIPO_CLIENTE."')"

if($linha['tipo'] == Usuario::TIPO_CLIENTE)
{
	//cliente
}
