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

$dados = array(
	'nome' => $categoria->nome,
	'descricao' => $categoria->descricao,
);

if($categoria->cadastrar($dados) == TRUE)
{
	echo 'Categoria cadastrada com sucesso';
}else{
	echo 'Não foi possível cadastrar categoria';
}