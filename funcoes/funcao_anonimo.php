<?php

	// require_once 'exemplo_1.php';
	// require_once 'exemplo_2.php';
	// exit;



	$array = [1, 2, 3];

	// foreach($array as $i => $numero)
	// {
	// 	$array[$i] = $numero+10;
	// }

	// var_dump($array);

	// function somaDez($num){

	// }
	echo ">>> ";

	$fAnonima = function($num){
		return $num+20;
	};

	$array = array_map($fAnonima, $array);

	var_dump($array);
