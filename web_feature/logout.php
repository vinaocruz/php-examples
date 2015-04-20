<?php
		
	setcookie('usuario[nome]', FALSE );
	// setcookie('usuario[email]', '', time()-100 );

	// unset( $_COOKIE['login'] );
	var_dump( $_COOKIE ); exit;
	
	header("Location: lendo_cookie.php"); 

?>