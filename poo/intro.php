<?php

require 'carro.class.php';

$categoria = new Categoria();
$categoria->nome = $_POST['nome'];
$categoria->descricao = $_POST['descricao'];
$categoria->cadastrar();


$carro = new Carro();
$carro_2 = new Carro();

$carro->velocidade = 100;

$carro->acelerar(50);
$carro->acelerar(10); 

$carro_2->acelerar(100);


var_dump($carro); //exit;
var_dump($carro_2); exit;




$carro->acelerar(20); 

$carro->acelerar(50); 

echo $carro->velocidade;
// echo "<br>";

// $carro_2->velocidade = 40;
$carro_2->acelerar(20);
// echo "<br>";
// $carro_2->frear();

// echo $carro_2->velocidade;

var_dump($carro);

// var_dump($carro_2);