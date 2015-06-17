<?php

//configura timezone
date_default_timezone_set("America/Bahia");

//configurar autoload
spl_autoload_register( 
	function($nome_classe){
		// echo 'Carregando objeto '.$nome_classe;
		// echo "<br>";

		if(file_exists('class/'. $nome_classe . '.class.php')){

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


//iniciando pacotes do composer
require_once "vendor/autoload.php";
