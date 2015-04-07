<?php

	$a = 0;
	while($a < 10)
	{
		$a++;
		if($a % 2 == 0)
		{
			echo "Parou no $a!<br />";
			continue;
			// break;
		}
		echo $a."<br />";
	}

	echo "Continou meu script";