<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/model/db/Connection.class.php";
require $_SERVER['DOCUMENT_ROOT'] . "/model/Produto/ProdutoModel.class.php";

class ProdutoConsulta {

	public function __construct() {
	}

	public function insertProduto($produto) {
		try {

			$c = new Connection();
			$con = $c->getConnection();

			$itens["descricao"] = $produto->getDescricao();
			$itens["data_criacao"] = $produto->getDataCriacao();
			$itens["id_grupo"] = $produto->getIdGrupo();
			$itens["valor"] = $produto->getValor();
			$itens["observacao"] = $produto->getObservacao();

			var_dump($itens);

			$query = 'INSERT INTO controle_financeiro.produto
						(descricao, data_criacao, id_grupo, valor, observacao)
					VALUES
						(:descricao, :data_criacao, :id_grupo, :valor, :observacao);';

			$con = $con->prepare($query);
			$con->execute($itens);

			include $_SERVER['DOCUMENT_ROOT'] . "/pages/sucesso.src.php";

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}

	}

	public function deleteProduto() {

	}

	public function updateProduto() {

	}

	public function getProdutos() {
		$c = new Connection();
		$con = $c->getConnection();

		$query = "SELECT * FROM controle_financeiro.produto;";

		$result = $con->query($query);

		return $result->fetchAll(PDO::FETCH_ASSOC);

	}

}