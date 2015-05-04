<?php

$teste = 10;

// funcao_teste(123);


$texto = "Vinicius";
funcao_teste($texto);

echo '<br>---<br>';
echo $texto;

include_once "exemplo_1.php";

function funcao_teste(&$mensagem)
{
	$mensagem.= " Cruz";
	echo $mensagem;
	echo '<br>......<br>';

	echo 'GLOBALS: '.$GLOBALS['texto'];
	// echo 'GLOBALS: '.$GLOBALS['teste'];

	// echo $teste;
	// echo $var1;
	// echo "<br>";
	// return $var2;
}

// echo $mensagem;
