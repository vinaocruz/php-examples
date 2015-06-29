<?php

require_once 'config/init.php';

$produto = new Produto($conn);
$produto->id = $_GET['id'];

if($produto->remover() == TRUE)
{
	echo "Produto removido";
}else
{
	echo "Falha ao remover produto";
}