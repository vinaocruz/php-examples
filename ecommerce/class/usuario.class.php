<?php

abstract class Usuario extends Model{
	
	protected $login;
	protected $senha;
	public $tabela = 'usuario';

	public function setLogin($login)
	{
		$this->login = $login;
	}
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function logar()
	{
		$dados = array(
			'login' => $this->login,
			'senha' => $this->senha,
		);
		$this->consultaEspecifica($dados);

		$resultado = $this->pegaUm();

		//usuário não encontrado
		if($resultado == FALSE)
		{
			return FALSE;
		//usuário encontrado, cria session
		}else
		{
			$_SESSION['cliente_id'] = $resultado['id'];
			return TRUE;
		}
	}

	public function logout()
	{

	}

	//metódo abstrato serve como modelo para classe filha
	// abstract public function alterarSenha(){}

}