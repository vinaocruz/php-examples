<?php

	$numero_1 = 12;
	$numero_2 = 30;


	$soma = $numero_1 + $numero_2;
	$divisao = $numero_1 / $numero_2;

	echo "A soma de $numero_1 + $numero_2 é igual a $soma";
	echo "<br />";
	echo 'A divisão de ' . $numero_1 . ' por ' . $numero_2 . ' é igual a ' . $divisao;


	echo "<hr>";

	var_dump( 1 === '1' ); 

	echo "<hr>";

	$nome = "Vinicius";

	var_dump($nome);

	$nome.= "Cruz"; // $nome = $nome . "Cruz";

	var_dump($nome);
	// echo $nome; 
	exit;

	$sobrenome = "Cruz";

	echo $nome . " " . $sobrenome;