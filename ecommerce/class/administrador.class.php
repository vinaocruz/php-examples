<?php

class Administrador extends Usuario{
	

	//implementação do método abstrato herdado
	public function alterarSenha()
	{
		echo "Alterando senha de admin";
	}

}