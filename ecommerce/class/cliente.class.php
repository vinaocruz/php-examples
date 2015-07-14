<?php

class Cliente extends Usuario{
	public $tabela = 'cliente';

	public $nome;
	public $email;
	public $telefone;
	public $cpf;

	public function getNome(){
		return $this->nome;
	}

	public function cadastroCompleto($dados)
	{
		$this->tabela = 'usuario';
		if($this->cadastrar($dados['usuario']) == TRUE)
		{
			$this->tabela = 'cliente';
			$dados['cliente']['usuario_id'] = $this->conn->lastInsertId();
			return $this->cadastrar($dados['cliente']);
		}else
		{
			var_dump($this->resultado->errorInfo());
			return FALSE;
		}
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
