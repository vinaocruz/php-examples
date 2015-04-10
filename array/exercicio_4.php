<?php

	// $a = array(1, 0, 0);
	// $b = array(0, 1, 0);
	// $c = array(0, 0, 1);

	// $m = array($a, $b, $c);
	// print_r($m);


	$sei_la = array();

	for ($a = 0; $a < 4; $a++)
	{
		for ($b = 0; $b < 4; $b++)
		{
			$sei_la[$a][$b] = ($a == $b) ? "1" : "0";
		}
	}