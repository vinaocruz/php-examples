<?php

	$cidades_ba = array('Salvador', 'Camaçari');
	$cidades_ce = array('Fortaleza');
	$cidades_rj = array('Rio de Janeiro', 'Niteroi');


	$estados = array("BA" => $cidades_ba, 
					 "CE" => $cidades_ce,
					 "RJ" => $cidades_rj,
					 );

	//percorrer todas as cidades do estado da CE
	foreach( $estados as $sigla => $cidades ){
		echo $sigla . "------<br />";
		foreach( $cidades as $cidade)
		{
			echo $cidade."<br />";
		}
		echo "<br />";
	}

	// echo $estados["BA"][1];
	// var_dump($estados);


	//percorrer todos os estados e mostrar as cidades cadastradas?
	// Exemplo:
	//BA ------
	//Salvador
	//Camaçari
	//
	//CE -----
	//Fortaleza

