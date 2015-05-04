<?php

	function gravar_msg($msg)
	{
		$_SESSION['feedback'] = $msg;
	}

	function mostrar_msg()
	{
		if(isset($_SESSION['feedback']) == FALSE)
		{
			return;
		}

		$msg = $_SESSION['feedback'];
		unset($_SESSION['feedback']);
		return $msg;
	}