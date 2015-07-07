<?php

	require_once 'config/init.php';

	//id do produto que vai ser adicionado
	$id = $_GET['id'];

	$produto = new Produto($conn);
	$produto->consulta($id);

	if(isset($_SESSION['cliente_id']))
	{
		$cliente = new Cliente($conn);
		$cliente->consulta($_SESSION['cliente_id']);
	}else
	{
		$cliente = NULL;
	}

	$item = new Item($conn);
	$item->setProduto( $produto );
	$item->setQuantidade(1); //valor padrão

	$compra = new Compra($conn);
	$compra->abrirCarrinho( $cliente );
	$compra->inserirProduto( $item );

	header('Location: carrinho.php');