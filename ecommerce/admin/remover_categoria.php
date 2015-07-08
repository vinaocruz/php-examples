<?php

// var_dump($_GET['id']);

require_once '../config/init.php';

if(is_numeric($_GET['id']) == FALSE)
{
	echo "Categoria inválida";
	exit;
}


$categoria = new Categoria($conn);
$categoria->id = $_GET['id'];

//TODO verificar se categoria tem produtos antes de remover

if($categoria->remover() == TRUE)
{
	echo 'Categoria removida';
}else{
	echo 'Falha ao remover categoria';
}
