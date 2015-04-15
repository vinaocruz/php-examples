<?php

	$array = array('a' => '4', 'b' => '2', 'c' => '3');
	var_dump($array);

	// echo current($array);

	//coloca ponteiro no final do array
	end($array);

	while( key($array) != NULL)
	{
		echo current($array); //retorna elemento da posição do ponteiro
		echo "<br />";
		prev($array); //volta uma posição do ponteiro
	}
