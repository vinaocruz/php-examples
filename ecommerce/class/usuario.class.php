<?php

abstract class Usuario{
	
	protected $login;
	protected $senha;

	public function logar()
	{
		echo 'Logando usuario';
	}

	public function logout()
	{

	}

	//metódo abstrato serve como modelo para classe filha
	abstract public function alterarSenha(){}

}