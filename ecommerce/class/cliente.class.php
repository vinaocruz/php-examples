<?php

class Cliente extends Usuario{
	public $tabela = 'cliente';

	// function __construct()
	// {
	// 	$this->tabela = "clientes";	
	// }

	// public function logar()
	// {
	// 	//reescrever o script de login
	// }


	public function alterarSenha()
	{
		echo "Alterando senha de cliente";
	}

}
