<?php

class Pai{

	protected $var;

	function __construct()
	{
		$this->var = 'Teste';
		echo 'Construtor pai<br>';
	}

	private function ei(){ echo 'ei pai'; }

	public function __set($name, $value)
	{
		echo "Setando $name <br>";
		$this->$name = $value;
	}
	public function __get($name)
	{
		echo "Recuperando $name<br>";
		return $this->$name;
	}
}

$pai = new Pai;
$pai->va = 'teste';
echo $pai->va;
exit;


class Teste extends Pai{
	// public $var;

	function __construct()
	{
		parent::__construct();
		// echo 'construtor filho';
		echo $this->var;
		$this->var = 'sobrescrito<br>';
	}

	public function ei(){ echo 'ei filha'; }

	// function __destruct()
	// {
	// 	echo 'Finalizando objeto...';
	// }

}

// $ob = new Teste();
// var_dump( $ob );

// echo $ob->var;
// unset($ob);
// echo 'Ola ..... ';

// $finfo = finfo_open( FILEINFO_MIME_TYPE );
// $mime = finfo_file($finfo, 'unidade.jpg');

// var_dump($mime);
