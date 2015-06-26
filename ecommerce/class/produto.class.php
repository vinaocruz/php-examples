<?php

class Produto extends Model{

	public $nome;
	public $descricao;
	public $preco;
	public $imagem;
	public $categoria_id;

	// protected $conn;
	// public $resultado;
	public $tabela = 'produtos';

	// function __construct($conn)
	// {
	// 	$this->conn = $conn;
	// }

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

	// public function consultaTodos()
	// {
	// 	$sql = "SELECT * FROM produtos";
	// 	$this->resultado = mysqli_query($this->conn, $sql);		
	// }
	public function consultaPorCategoria($categoria_id)
	{
		$sql = "SELECT * FROM produtos WHERE categoria_id = $categoria_id";
		$this->resultado = mysqli_query($this->conn, $sql);		
	}

	// public function pegaUm()
	// {
	// 	return mysqli_fetch_assoc($this->resultado);
	// }


	/**
	 * Receber as informações e salvar no banco de dados
	 */
	// public function cadastrar()
	// {
	// 	$sql = "INSERT INTO produtos (categoria_id, nome, descricao, preco, imagem, data_criado)
	// 	VALUES('$this->categoria_id', '$this->nome', '$this->descricao', '$this->preco', '$this->imagem', NOW())";
	
	// 	return mysqli_query($this->conn, $sql);
	// }

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