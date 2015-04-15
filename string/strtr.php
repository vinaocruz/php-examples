<?php

	// echo strtr('abc', 'ab', 'á');

	$var = "O rato roeu a roupa";
	$var_trocada = str_replace("rato", "esquilo", $var);

	echo $var_trocada;