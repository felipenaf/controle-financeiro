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
			$itens["data_criacao"] = $produto->getDataCriacao();
			$itens["grupo"] = $produto->getGrupo();
			$itens["valor"] = $produto->getValor();
			$itens["observacao"] = $produto->getObservacao();
			$itens["tipo"] = $produto->getTipo();

			var_dump($itens);

			$query = 'INSERT INTO controle_financeiro.produto 
						(descricao, data_criacao, grupo, valor, observacao, tipo)
					VALUES 
						(:descricao, :data_criacao, :grupo, :valor, :observacao, :tipo);';

			$con = $con->prepare($query);
			$con->execute($itens);

		} catch (Exception $e) {
			echo $e->getMessage();
		}finally{
			$c->closeAll();
		}

	}

	public function deleteProduto() {

	}

	public function updateProduto() {

	}

	public function listProduto() {

	}

}