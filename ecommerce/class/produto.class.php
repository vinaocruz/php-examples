<?php

class Produto{
	public $nome;
	public $descricao;
	public $preco;
	public $imagem;

	protected $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function consulta($id)
	{
		$sql = "SELECT * FROM produtos WHERE id = $id";
		$query = mysqli_query($this->conn, $sql);
		$linha = mysqli_fetch_assoc($query);

		$this->nome = $linha['nome'];
		$this->preco = $linha['preco'];
		$this->descricao = $linha['descricao'];
		$this->imagem = $linha['imagem'];
	}


	/**
	 * Receber as informações e salvar no banco de dados
	 */
	public function cadastrar()
	{
		$sql = "INSERT INTO produtos (nome, descricao, preco, imagem, data_criado)
		VALUES('$this->nome', '$this->descricao', '$this->preco', '$this->imagem', NOW())";
	
		return mysqli_query($this->conn, $sql);
	}

	/**
	 * Salvar imagem na pasta
	 */
	public function salvarFoto()
	{
		//define nome do arquivo do produto
		$arquivo = uniqid()."_".$_FILES['foto']['name'];

		//guarda imagem na pasta de uploads
		if(move_uploaded_file($_FILES['foto']['tmp_name'], 
					"uploads/produtos/".$arquivo)){

			//retorna o nome do arquivo
			return $arquivo;
		}else
		{
			return FALSE;
		}
	}

}