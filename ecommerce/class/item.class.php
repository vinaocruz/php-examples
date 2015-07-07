<?php


class Item extends Model{
	public $produto;
	public $quantidade;
	public $valor;

	/**
	 * 
	 */
	public function setProduto($produto)
	{
		$this->produto = $produto;
		$this->valor = $produto->preco;

	}

	public function setQuantidade($quantidade)
	{
		$this->quantidade = $quantidade;
	}

}