<?php

class ProdutoConsulta {

	private $db;

	public function __construct() {
		$this->db = parse_ini_file("config/database.ini");
	}

	public function insertProduto($produto) {
		try {
			$c = new Connection();
			$con = $c->getConnection();

			$itens = array(
				"id_usuario" => $produto->getIdUsuario(),
				"descricao" => $produto->getDescricao(),
				"data_criacao" => $produto->getDataCriacao(),
				"id_grupo" => $produto->getIdGrupo(),
				"valor" => $produto->getValor(),
				"observacao" => $produto->getObservacao(),
			);

			$query = "INSERT INTO {$this->db['database']}.produtos
						(id_usuario, descricao, data_criacao, id_grupo, valor, observacao)
					VALUES
						(:id_usuario, :descricao, :data_criacao, :id_grupo, :valor, :observacao);";

			$con = $con->prepare($query);
			$con->execute($itens);

			include "pages/sucesso.src.php";

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function updateProduto($produto) {
		try {
			$c = new Connection();
			$con = $c->getConnection();

			$itens = array(
				"id_usuario" => $produto->getIdUsuario(),
				"id" => $produto->getIdProduto(),
				"descricao" => $produto->getDescricao(),
				"data_criacao" => $produto->getDataCriacao(),
				"id_grupo" => $produto->getIdGrupo(),
				"valor" => $produto->getValor(),
				"observacao" => $produto->getObservacao(),
			);

			$query = "UPDATE {$this->db['database']}.produtos
						SET
							id_usuario = :id_usuario, descricao = :descricao, data_criacao = :data_criacao, id_grupo = :id_grupo, valor = :valor, observacao = :observacao
						WHERE
							id = :id;";

			$con = $con->prepare($query);
			$con->execute($itens);

			include "pages/sucesso.src.php";

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function deleteProduto($produto) {
		try {
			$c = new Connection();
			$con = $c->getConnection();
			$id = $produto->getIdProduto();
			$query = "DELETE FROM {$this->db['database']}.produtos WHERE id = :id;";
			$stmt = $con->prepare($query);
			$stmt->bindValue(":id", $id);
			$stmt->execute();

			include "pages/produto/excluir-confirmar.html.php";

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function getProdutos($id_usuario) {
		try {
			$c = new Connection();
			$con = $c->getConnection();

			$query = "SELECT id, id_grupo, descricao, valor, observacao, DATE_FORMAT(data_criacao, '%Y-%m-%d') as data_criacao, data_modificacao
						FROM
							{$this->db['database']}.produtos
						WHERE
							id_usuario = :id_usuario
						ORDER BY
							data_criacao DESC, data_modificacao DESC;";

			$stmt = $con->prepare($query);
			$stmt->bindValue(":id_usuario", $id_usuario);
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function getProdutoById($id) {
		try {
			$c = new Connection();
			$con = $c->getConnection();

			$query = "SELECT * FROM {$this->db['database']}.produtos WHERE id = :id;";

			$stmt = $con->prepare($query);
			$stmt->bindValue(":id", $id);
			$stmt->execute();

			return $stmt->fetch(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}
}