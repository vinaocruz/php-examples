<?php
	session_start();

	define("LOGIN", "vinao");
	define("PASS", "123123");

	function autenticar($login, $senha)
	{
		if( empty($login) )
		{
			echo "Informe seu login";
			exit;
		}

		if ($login == LOGIN AND $senha == PASS)
		{
			$_SESSION['login'] = $login;

			return TRUE;
		}else
		{
			return FALSE;
		}
	}

	function sair()
	{
		session_destroy();
	}

	function checarPermissao()
	{
		if ( isset($_SESSION['login']) == FALSE)
		{
			header("Location: login.php");
			exit;
		}
	}