<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/model/Produto/ProdutoConsulta.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/model/Produto/ProdutoModel.class.php";

class ProdutoController {

	public static function insertProduto($produto) {

		$p = new ProdutoModel();
		$p->setDescricao(!empty($produto['descricao']) ? $produto['descricao'] : NULL);
		$p->setDataCriacao($produto['data_criacao']);
		$p->setIdGrupo($produto['id_grupo']);
		$p->setValor($produto['valor']);
		$p->setObservacao($produto['observacao']);

		$consulta = new ProdutoConsulta();
		return $consulta->insertProduto($p);
	}

	public static function getProdutos() {
		$consulta = new ProdutoConsulta();
		return $consulta->getProdutos();
	}

}
