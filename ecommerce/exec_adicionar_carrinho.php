<?php

	require_once 'config/init.php';

	$id = $_GET['id'];

	$produto = new Produto($conn);
	$produto->consulta($id);

	$compra = new Compra($conn);
	$compra->abrirCarrinho();
	$compra->inserirProduto( $produto );