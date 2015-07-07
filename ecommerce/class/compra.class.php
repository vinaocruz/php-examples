<?php

class Compra extends Model{
	public $id;
	public $tabela = 'compra';
	public $cliente;

	public function temAberta()
	{
		//cliente não está logado
		if(is_null($this->cliente))
		{
			return isset($_SESSION['compras']);

		//cliente está logado
		}else
		{
			$sql = "SELECT * FROM $this->tabela WHERE status = 'A' AND cliente_id = :cliente_id";

			$this->resultado = $this->conn->prepare($sql);
			$this->resultado->bindValue(':cliente_id', $cliente_id);

			$this->resultado->execute();

			$a = $this->pegaTodos();
			if(count($a) == 0)
			{
				return FALSE;
			}else
			{
				return TRUE;
			}
		}
	}

	public function abrirCarrinho($cliente)
	{
		$this->cliente = $cliente;

		if($this->temAberta() == TRUE)
		{
			return;
		}

		//cliente não está logado
		if(is_null($this->cliente))
		{
			$_SESSION['compras'] = array();

		//cliente está logado
		}else
		{
			$dados = array(
				'status' => 'A', //Aberto
				'cliente_id' => $cliente_id,
				'data_registro' => date('Y-m-d H:i:s'),
			);
			$this->cadastrar($dados);
			// INSERT INTO compras (status, ciente_id) VALUES ('A', $cliente_id)
		}
	}

	public function inserirProduto( $item )
	{
		$dados = array(
			'compra_id' => $this->id,
			'produto_id' => $item->produto->id,
			'valor' => $item->valor,
			'quantidade' => $item->quantidade,
		);

		//cliente não está logado
		if(is_null($this->cliente))
		{
			//salva item em session
			$_SESSION['compras'][] = $dados;

		//cliente está logado, salva em banco de dados
		}else
		{
			$item->cadastrar($dados);
		}
	}

	public function listarTodosProdutos()
	{
		//cliente não está logado
		if(is_null($this->cliente))
		{
			if($this->temAberta() == TRUE)
			{
				return $_SESSION['compras'];
			}
		//cliente está logado, salva em banco de dados
		}else
		{
			
		}
	}

	public function removerItem($produto_id)
	{
		//cliente não está logado
		if(is_null($this->cliente))
		{
			foreach($_SESSION['compras'] as $k => $item)
			{
				if($item['produto_id'] == $produto_id)
				{
					unset($_SESSION['compras'][$k]);
				}
			}
		//cliente está logado, salva em banco de dados
		}else
		{
			
		}

	}

	public function atualizaProduto($produto_id, $quantidade)
	{
		//cliente não está logado
		if(is_null($this->cliente))
		{
			foreach($_SESSION['compras'] as $k => $item)
			{
				if($item['produto_id'] == $produto_id)
				{
					$_SESSION['compras'][$k]['quantidade'] = $quantidade;
				}
			}
		//cliente está logado, salva em banco de dados
		}else
		{
			
		}
	}

}