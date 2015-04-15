<?php

	// 1 / 0
	// TRUE / FALSE

	$frase = "abcdefa";
	$var = "a";

	var_dump( strrpos($frase, $var) );
	exit;	

	if( strpos($frase, $var) === FALSE )
	{
		echo "Não foi encontrado";
	}else
	{
		echo "Foi encontrado";
	}
