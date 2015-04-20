<?php
	if ( isset($_COOKIE['login']) == FALSE )
	{
		echo "Acesso negado!";
		exit;
	}	
?>

Olá <?php echo $_COOKIE['login']; ?>!