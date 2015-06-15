<?php

// var_dump($_POST);exit;

require_once 'config/init.php';


$conn = mysqli_connect('localhost', 'root', 'dev123', 'orcamento');



$produto = new Produto($conn);

$produto->nome = $_POST['nome'];
$produto->descricao = $_POST['descricao'];
$produto->preco = $_POST['preco'];
$produto->categoria_id = $_POST['categoria'];

$nome_imagem = $produto->salvarFoto();

if($nome_imagem == FALSE)
{
	echo "Falha no envio de imagem";
}else
{
	$produto->imagem = $nome_imagem;
	if($produto->cadastrar() == TRUE){

		//gerar miniatura
		$thumb = PhpThumbFactory::create('uploads/produtos/'. $nome_imagem);
		$thumb->adaptiveResize(200, 200);
		$thumb->save('uploads/produtos/thumb/'.$nome_imagem);

		echo 'Produto cadastrado com sucesso';
	}else
	{
		echo 'Erro ao cadastrar produto';
	}
}