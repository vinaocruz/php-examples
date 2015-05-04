<?php

	require_once "users.lib.php";
	require_once "feedback.lib.php";

	$login = $_POST['username'];
	$senha = $_POST['password'];

	if( autenticar($login, $senha) == TRUE)
	{
		header("Location: index.php");
	} else 
	{
		gravar_msg("Dados incorretos");
		header("Location: login.php");
	}

	// session_start();

	// define("LOGIN", "vinao");
	// define("PASS", "123123");

	// $login = $_POST['username'];
	// if( empty($login) )
	// {
	// 	echo "Informe seu login";
	// 	exit;
	// }

	// if ($login == LOGIN AND $_POST['password'] == PASS)
	// {
	// 	$_SESSION['login'] = $login;

	// 	header("Location: painel.php");
	// }else
	// {
	// 	echo "Dados incorretos";
	// }