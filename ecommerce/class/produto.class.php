<?php

class Produto{

	public function cadastrar(){
		$arquivo = $this->enviarFoto();
		"INSERT INTO produto (nome, foto) VALUES ('$this->nome', '$arquivo' )";
	}

	public function enviarFoto()
	{

		$a = 0;
		$arquivo = $_FILES['foto']['name'];
		$info_file = pathinfo('uploads/'.$arquivo);

		while(file_exists('uploads/'.$arquivo))
		{
			$a++;
			$arquivo = $info_file['filename']."_$a.".$info_file['extension'];
		}

		if($_FILES['foto']['size'] < 500*1024)
		{
			return NULL;
		}

		if(move_uploaded_file($_FILES['foto']['tmp_name'], 
					'uploads/'.$arquivo)){
					// 'uploads/'.uniqid()."_".$_FILES['foto']['name'])){

			return $arquivo;
		}else
		{
			return NULL;
		}
	}

}