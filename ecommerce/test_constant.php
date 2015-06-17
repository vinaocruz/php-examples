<?php


require 'config/init.php';

$conn = mysqli_connect('localhost', 'root', 'dev123', 'orcamento');

$c = new Produto($conn);
$cat = new Categoria($conn);
exit;





// var_dump(Usuario::$estado_civil);

// echo Usuario::logar();


// $dt = "12/12/2000"; //$_POST
// "INSERT INTO usuario (data_nascimento) VALUES ('".DataHelper::convertePtbrParaEn($dt)."')";




// echo DataHelper::converteEnParaPtbr('2000-12-12');