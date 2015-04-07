<?php

	
	$ano = 3010;

	// if ( $ano % 400 == 0 )
	// {
	// 	echo "O ano é bissexto";

	// }elseif( $ano % 4 == 0 AND $ano % 100 != 0 )
	// {
	// 	echo "O ano é bissexto";
	// }else
	// {
	// 	echo "O ano não é bissexto";
	// }


	if ( $ano % 400 == 0 OR ( $ano % 4 == 0 AND $ano % 100 != 0 ) )
	{
		echo "O ano é bissexto";

	}else
	{
		echo "O ano não é bissexto";
	}