<?php

	//verificar se usuario visitou a página
	if ( isset($_COOKIE['acesso']) == FALSE )
	{
		$acesso = 1;
		echo "Este seu primeiro acesso";
	}else
	{
		//recupero quantas vezes o usuário acessou anteriormente
		$acesso = $_COOKIE['acesso'];

		//incrementar acesso
		$acesso++;

		echo "Este é seu acesso n ".$acesso;
	}
	
	//salvar no cookie
	setcookie("acesso", $acesso, time() + (7*86400));