<?php

require_once 'config/init.php';

$produto_id = $_GET['produto_id'];
$quantidade = $_GET['quantidade'];

// echo $produto_id . ' - ' . $quantidade; exit;

$compra = new Compra($conn);
$compra->atualizaProduto($produto_id, $quantidade);