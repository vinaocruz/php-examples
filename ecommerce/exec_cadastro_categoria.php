<?php

// var_dump($_POST);exit;

include 'config/init.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$conn = mysqli_connect('localhost', 'root', 'dev123', 'orcamento');
mysqli_set_charset($conn, "utf8");

$categoria = new Categoria($conn);
$categoria->nome = $nome;
$categoria->descricao = $descricao;

if($categoria->cadastrar() == TRUE)
{
	echo 'Categoria cadastradã com sucesso';
}else{
	echo 'Não foi possível cadastrar categoria';
}