<?php

	$array = array();

	$numero = 0; //verificar se é par
	$elementos_a_adicionar = 20; //quantidade de elementos a serem adicionados

	while( $elementos_a_adicionar > 0 )
	{
		if ( $numero % 2 == 0 )
		{
			array_push($array, $numero);
			$elementos_a_adicionar--;
		}

		$numero++;
	}

	// echo "<pre>";
	var_dump($array);

	echo "Total de elementos: ";
	echo count($array);
	exit;


	$soma = 0;

	//loop para percorrer o array
	// foreach( $array as $valor_array )
	$total_elementos = count($array);
	for($i=0; $i<$total_elementos; $i++)
	{
		// $soma+=$valor_array;
		$soma+=$array[$i];
	}
	echo $soma;







