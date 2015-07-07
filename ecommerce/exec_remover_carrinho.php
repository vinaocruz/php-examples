<?php

require_once 'config/init.php';

$produto_id = (int)$_GET['id'];

$compra = new Compra($conn);
$compra->removerItem( $produto_id );

header('Location: carrinho.php');
// var_dump($_SESSION['compras']);