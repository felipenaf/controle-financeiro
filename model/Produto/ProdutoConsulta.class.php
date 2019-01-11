<?php

require $_SERVER['DOCUMENT_ROOT'] . "/model/db/Connection.class.php";
require $_SERVER['DOCUMENT_ROOT'] . "/model/Produto/ProdutoModel.class.php";

class ProdutoConsulta {

	public function __construct() {
	}

	public function insertProduto($produto) {
		try {
			$c = new Connection();
			$con = $c->getConnection();

			$itens["descricao"] = $produto->getDescricao();
			$itens["data"] = $produto->getDataCriacao();
			$itens["grupo"] = $produto->getGrupo();
			$itens["valor"] = $produto->getValor();
			$itens["observacao"] = $produto->getObservacao();
			$itens["tipo"] = $produto->getTipo();

			$query = 'INSERT INTO controle_financeiro.produto (descricao, data_criacao, grupo, valor, observacao, tipo)
						VALUES (:descricao, :data_criacao, :grupo, :valor, :observacao, :tipo);';

			$teste = $con->prepare($query);
			// https://phpdelusions.net/pdo_examples/insert
			// Exception has occurred.
			// PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined
			$teste->execute($itens);

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		// var_dump($produto);

	}

	public function deleteProduto() {

	}

	public function updateProduto() {

	}

	public function listProduto() {

	}

}