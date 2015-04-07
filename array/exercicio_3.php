<?php

	//array de estados
	$estados = array("Bahia", "Ceará", "Rio de Janeiro");

	//utilizar for para controlar a quantidade do loop

	//acessar um elemento por vez, cada vez que o loop executar
	//ex: primeiro loop, exibe primeiro elemento
	//	  segundo loop, exibe segundo elemento, etc...
	for($i=0; $i<count($estados); $i++)
	{
		echo $estados[$i]. '<br />';
	}

	// var_dump($estados);

