<?php

class Compra extends Model{
	public $id;

	public function temAberta()
	{
		// SELECT * FROM compras WHERE status = 'A' AND cliente_id = $cliente_id

		//return TRUE / FALSE
	}

	public function abrirCarrinho()
	{
		if($this->temAberta() == TRUE)
		{
			return;
		}

		// INSERT INTO compras (status, ciente_id) VALUES ('A', $cliente_id)


	}

	public function inserirProduto($produto)
	{
		//INSERT INTO item (compra_id, produto_id, valor, quantidade ) 
		// VALUE ($this->id, $produto->id, $produto->valor, 1)


		echo $produto->valor;
		echo $produto->id;
	}

}