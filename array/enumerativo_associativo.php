<?php

	$pais = array(
		15 	=> "Brasil",
		5 	=> "Argentina",
		345 => "EUA",
	);

	$pais[] = "Canadá";

	var_dump($pais);

	//array enumerativo (chave numérica)
	$alunos = array(5 => "João", "José", 1 => "Maria", "Joaquim");
	var_dump($alunos);

	//array associativo (chave como string)
	$aluno = array(
		"nome" => "João",
		"idade" => 25
	);
	var_dump($aluno);
	echo $aluno['nome'];