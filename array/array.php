<?php

	// $frutas = array('melancia', 'pêra');
	$frutas = ['melancia', 'pêra']; //a partir 5.4

	var_dump($frutas);

	$frutas[1] = "açai"; //adicionar elemento no array
	var_dump($frutas);

	array_push($frutas, "cupuaçu"); //adicionar elemento no array
	
	echo "<pre>";
	var_dump($frutas);

	echo $frutas[0];


	// $verdura[0] = 'tomate';
	// $verdura[1] = 'alface';
	// var_dump($verdura);
