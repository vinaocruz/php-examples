<?php

	$frutas = array('uva', 'melão');
	var_dump( count($frutas) );

	unset($frutas[0]);
	var_dump( in_array('uva', $frutas) ); //false

	var_dump( $frutas );
