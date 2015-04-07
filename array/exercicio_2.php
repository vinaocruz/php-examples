<?php

	//array de estados brasileiros
	$estados = array(
		"BA" => "Bahia",
		"CE" => "Ceará",
		"RJ" => "Rio de Janeiro",
	);
	// echo $estados["CE"];

	//percorre o array
	foreach( $estados as $indice => $valor )
	{
		echo '>>> ' . $indice . ' - ' . $valor . '<br />';
	}

	// echo $estados["CE"];

