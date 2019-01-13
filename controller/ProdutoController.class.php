<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/model/Produto/ProdutoConsulta.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/model/Produto/ProdutoModel.class.php";

class ProdutoController {

	public function __construct() {

	}

	public static function insertProduto($produto) {

		$p = new ProdutoModel();
		$p->setDescricao(!empty($produto['descricao']) ? $produto['descricao'] : NULL);
		$p->setDataCriacao($produto['data_criacao']);
		$p->setGrupo($produto['grupo']);
		$p->setValor($produto['valor']);
		$p->setObservacao($produto['observacao']);
		$p->setTipo($produto['tipo']);

		$consulta = new ProdutoConsulta();
		return $consulta->insertProduto($p);
	}

}
