<?php

session_start();

//configura timezone
date_default_timezone_set("America/Bahia");

//configurar autoload
spl_autoload_register( 
	function($nome_classe){
		// echo 'Carregando objeto '.$nome_classe;
		// echo "<br>";

		if(file_exists('class/'. strtolower($nome_classe) . '.class.php')){

			require_once 'class/'. strtolower($nome_classe) . '.class.php';
			return;

		}
		if(file_exists('helpers/'. $nome_classe . '.class.php')){
			require_once 'helpers/'. $nome_classe . '.class.php';
			return;
		}
	}
);


//definir configuração de banco de dados
$database = array(
	'host' => 'localhost',
	'user' => 'root',
	'pass' => 'dev123',
	'database' => 'orcamento',
);
// $conn = mysqli_connect($database['host'], $database['user'], $database['pass'], $database['database']);
// mysqli_set_charset($conn, "utf8");

$conn = new PDO("mysql:host={$database['host']};dbname={$database['database']};charset=UTF8", 
	$database['user'], $database['pass']);

//iniciando pacotes do composer
require_once "vendor/autoload.php";
