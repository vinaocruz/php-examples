<?php

	setcookie("usuario[nome]", "Vinicius");
	setcookie("usuario[email]", "vinao@gmai.com");

	//redireciona usuário para determinado destino
	header("Location: lendo_cookie.php");

	echo $_COOKIE['usuario']['nome'];
	echo $_COOKIE['usuario']['email'];