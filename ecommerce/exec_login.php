<?php

require_once "config/init.php";

$cliente = new Cliente($conn);
$cliente->setLogin($_POST['login']);
$cliente->setSenha($_POST['senha']);

if($cliente->logar())
{
	$url = "index.php";
}else
{
	$url = "login.php";
}

header("Location: $url");