<?php

abstract class Usuario extends Model{
	
	protected $login;
	protected $senha;

	final public function logar()
	{
		echo 'Logando usuario';
	}

	public function logout()
	{

	}

	//metódo abstrato serve como modelo para classe filha
	// abstract public function alterarSenha(){}

}