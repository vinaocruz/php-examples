<?php

	session_start();

	// echo session_id();
	// echo '<br />';
	// echo session_name();

	// unset($_SESSION['test_1']);

	session_destroy();

	header("Location: lendo_session.php");