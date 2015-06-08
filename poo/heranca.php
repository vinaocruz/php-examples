<?php

class Usuario{
	private function criptogafarSenha($senha)
	{
		return;
	}

	public function logar()
	{

	}

}

class Cliente extends Usuario{
	public $senha;

	public function cadastrar()
	{
		$this->criptogafarSenha($this->senha);
	}

}



class Pai{
	protected $nome;
	public $email;

	protected function andar(){
		echo 'Caminhando';
	}

	public function setNome($valor)
	{
		$this->nome = $valor;
	}

}


$pai = new Pai();
// $pai->nome = 'Jose';
$pai->setNome('José');
$pai->andar();
exit;



class Bebe extends Pai{

	public function movimentar()
	{

	}
	public function andar(){
		$this->movimentar();
		echo "Engatinhando $t...";
	}

}

class Filha extends Pai{

}

// $bebe = new Bebe();
// $bebe->andar();
// $bebe->andar(123);
// exit;


var_dump($pai);
exit;

$filha = new Filha();
$filha->andar();

var_dump($filha);

