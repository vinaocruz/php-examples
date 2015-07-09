<?php

class Cliente extends Usuario{
	public $tabela = 'cliente';
	public $nome;

	public function getNome(){
		return $this->nome;
	}


	// function __construct()
	// {
	// 	$this->tabela = "clientes";	
	// }

	// public function logar()
	// {
	// 	//reescrever o script de login
	// }

	public function estaLogado()
	{
		if(isset($_SESSION['cliente_id']))
		{
			$this->consulta($_SESSION['cliente_id']);
			return TRUE;
		}else
		{
			return FALSE;
		}
	}

	public function consulta($id)
	{
		$this->consultaEspecifica(array('usuario_id' => $id));
		$resultado = $this->pegaUm();

		$this->nome = $resultado['nome'];
	}

	public function alterarSenha()
	{
		echo "Alterando senha de cliente";
	}

}
