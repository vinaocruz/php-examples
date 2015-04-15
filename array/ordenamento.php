<?php 

	$array = array('a' => '4', 'b' => '2', 'c' => '3');
	var_dump($array);

	// sort( $array );
	// rsort( $array );
	// asort( $array );
	// arsort( $array );
	// ksort( $array );
	krsort( $array );

	var_dump($array);

	