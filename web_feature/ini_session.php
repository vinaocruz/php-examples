<?php

	session_start();

	$_SESSION['nome'] = "Vinicius";

	header("Location: lendo_session.php");