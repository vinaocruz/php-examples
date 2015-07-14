<?php

// var_dump($_GET);

require_once 'config/init.php';

$cliente = new Cliente($conn);
$cliente->nome = $_GET['nome'];
$cliente->email = $_GET['email'];

$cliente->login = $_GET['email'];
$cliente->facebook_id = $_GET['id'];

//Verifico se usuário já existe
if($cliente->logarComFacebook())
{
	echo '2'; //logando..
}
else
{
	//se não
	$dados = array(
		'cliente' => array(
			'nome' => $cliente->nome,
			'email' => $cliente->email,
		),
		'usuario' => array(
			'login' => $cliente->email,
			'facebook_id' => $_GET['id'],
			'senha' => sha1(uniqid()),
		)
	);
	if($cliente->cadastroCompleto($dados) == TRUE)
	{
		echo '1';
	}else
	{
		echo '0';
	}
}
