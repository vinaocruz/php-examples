<?php

	// mb_internal_encoding("utf8");

	$var = "João";

	// echo $var[2];
	
	for($i = 0; $i < mb_strlen($var, "utf8"); $i++)
	{
		echo $var[$i]."<br />";
	}

	// var_dump( is_array($var) );