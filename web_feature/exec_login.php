<?php

	define("LOGIN", "vinao");
	define("PASS", "123123");

	$login = $_POST['username'];
	if( empty($login) )
	{
		echo "Informe seu login";
		exit;
	}

	if ($login == LOGIN AND $_POST['password'] == PASS)
	{
		setcookie('login', $login);
		header("Location: painel.php");
		// echo "Usuário logado";
	}else
	{
		echo "Dados incorretos";
	}