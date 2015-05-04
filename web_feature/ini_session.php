<?php

	session_start();

	$_SESSION['id'] = "1234";

	// $_SESSION['email'] = "vinaocruz@gmail.com";
	// $_SESSION['idade'] = 30;
	// $_SESSION['nome'] = "Vinicius";

	$_SESSION['usuario'] = array(
		'nome' => 'Vinicius',
		'email' => 'vinaocruz@gmail.com',
	);

	// echo $_SESSION['usuario']['nome'];
	// exit;

	// $_SESSION['email'] = "vinaocruz@gmail.com";
	// $_SESSION['idade'] = 30;


	header("Location: lendo_session.php");