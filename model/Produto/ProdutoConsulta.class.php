<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/model/db/Connection.class.php";
require $_SERVER['DOCUMENT_ROOT'] . "/model/Produto/ProdutoModel.class.php";

class ProdutoConsulta {

	public function insertProduto($produto) {
		try {

			$c = new Connection();
			$con = $c->getConnection();

			$itens["descricao"] = $produto->getDescricao();
			$itens["data_criacao"] = $produto->getDataCriacao();
			$itens["id_grupo"] = $produto->getIdGrupo();
			$itens["valor"] = $produto->getValor();
			$itens["observacao"] = $produto->getObservacao();

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

	public function updateProduto($produto) {

		$c = new Connection();
		$con = $c->getConnection();

		$itens['id_produto'] = $produto->getIdProduto();
		$itens["descricao"] = $produto->getDescricao();
		$itens["data_criacao"] = $produto->getDataCriacao();
		$itens["id_grupo"] = $produto->getIdGrupo();
		$itens["valor"] = $produto->getValor();
		$itens["observacao"] = $produto->getObservacao();

		$query = 'UPDATE controle_financeiro.produto
					SET
						descricao = :descricao, data_criacao = :data_criacao, id_grupo = :id_grupo, valor = :valor, observacao = :observacao
					WHERE
						id_produto = :id_produto;';

		$con = $con->prepare($query);
		$con->execute($itens);

		include $_SERVER['DOCUMENT_ROOT'] . "/pages/sucesso.src.php";

	}
	public function deleteProduto() {

	}

	public function getProdutos() {
		$c = new Connection();
		$con = $c->getConnection();

		$query = "SELECT * FROM controle_financeiro.produto ORDER BY data_criacao DESC;";

		$result = $con->query($query);

		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getProdutoById($id_produto) {
		$c = new Connection();
		$con = $c->getConnection();

		$query = "SELECT * FROM controle_financeiro.produto WHERE id_produto = $id_produto;";

		$result = $con->query($query);

		return $result->fetch(PDO::FETCH_ASSOC);
	}

}