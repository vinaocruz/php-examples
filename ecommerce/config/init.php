<?php

session_start();

//configura timezone
date_default_timezone_set("America/Bahia");

//configurar autoload
spl_autoload_register( 
	function($nome_classe){

		$model_path = __DIR__.'/../class/'. strtolower($nome_classe) . '.class.php';
		if(file_exists($model_path)){

			require_once $model_path;
			return;

		}

		$helper_path = __DIR__ . '/../helpers/'. $nome_classe . '.class.php';
		if(file_exists($helper_path)){
			require_once $helper_path;
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
require_once __DIR__."/../vendor/autoload.php";
