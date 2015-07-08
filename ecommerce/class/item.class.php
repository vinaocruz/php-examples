<?php

class Item extends Model{
	public $produto;
	public $quantidade;
	public $valor;

	/**
	 * Recebe objeto do item e guarda valor do item
	 * @param Produto $produto Objeto de produto que compoe o item
	 */
	public function setProduto($produto)
	{
		$this->produto = $produto;
		$this->valor = $produto->preco;

	}

	/**
	 * Recebe quantidade do item adicionado em compra
	 * @param Int $quantidade
	 */
	public function setQuantidade($quantidade)
	{
		$this->quantidade = $quantidade;
	}

}