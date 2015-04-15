<?php

	$newsletter = array(
		array("nome" => "Vinicius", "email" => "vinao@gmail.com"),
		array("nome" => "João", "email" => "joao@gmail.com"),
	);

	$frase = "Olá %id_name%. Seu e-mail %id_email% foi enviado com sucesso";

	$troque = array("%id_email%", "%id_name%");

	foreach($newsletter as $usuario){
		// $f1 = str_replace("%nome%", $usuario['nome'], $frase);
		// echo str_replace("%email%", $usuario['email'], $f1);

		$u = array($usuario['email'], $usuario['nome']);
		echo str_replace($troque, $u, $frase)."<br />";		
	}