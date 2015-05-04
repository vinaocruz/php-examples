<?php
	session_start();

	// if ( isset($_COOKIE['login']) == FALSE )
	if ( isset($_SESSION['login']) == FALSE )
	{
		echo "Acesso negado!";
		exit;
	}	
?>

Olá <?php echo $_SESSION['login']; ?>!