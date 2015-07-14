<?php

abstract class Usuario extends Model{
	
	public $login;
	public $senha;
	public $facebook_id;

	public $tabela = 'usuario';

	public function setTabela()
	{
		$this->tabela = 'usuario';
	}

	public function setLogin($login)
	{
		$this->login = $login;
	}
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function logarComFacebook()
	{
		$this->setTabela();
		$dados = array(
			'login' => $this->login,
			'facebook_id' => $this->facebook_id,
		);

		//consulta no banco
		$this->consultaEspecifica($dados);

		$resultado = $this->pegaUm();
		// var_dump($this->resultado); exit;

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

	public function logar()
	{
		$this->setTabela();
		$dados = array(
			'login' => $this->login,
			'senha' => sha1($this->senha),
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