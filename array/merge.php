<?php

	$a = array(1 => 'um', 'test' => 'hello');
	$b = array(1 => 'tres', 5=>'dois', 'test' => 'word');


	$c =  array('test' => 'hello', 1=>'um');

	var_dump($a === $c);

	// var_dump($a+$b);
	// var_dump(array_merge($a, $b));
