<?php

try {
	
	divisao();
// if($retorno == 0)
// {
// 	echo "divisao nao pode ser zero";
// }
// if($retorno == NULL)
// {

// }
}catch(Exception $e)
{
	echo $e->getMessage();
	// grava_msg($e->getMessage());
}


function divisao()
{
	$numero = 200;
	$divisor = 2;
	if($divisor == 0)
	{
		// return 0;
		throw new Exception("Divisão não pode ser por zero");
	}
	if($numero < 200)
	{
		// return null;
		throw new Exception("Número deve ser maior que 200");		
	}

	echo $numero/$divisor;
}