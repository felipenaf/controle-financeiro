<?php

class GrupoConsulta {

	private $db;

	public function __construct() {
		$this->db = parse_ini_file("config/database.ini");
	}

	public function insertGrupo($grupo) {
		try {
			$c = new Connection();
			$con = $c->getConnection();
			$itens = array(
				'nome' => $grupo->getNome(),
				'slug' => $grupo->getSlug(),
				'tipo' => $grupo->getTipo(),
			);
			$query = "INSERT INTO {$this->db['database']}.grupos
						(nome, slug, tipo)
					VALUES
						(:nome, :slug, :tipo);";
			$con = $con->prepare($query);
			$con->execute($itens);
			include "pages/sucesso.src.php";

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function updateGrupo($grupo) {
		try {
			$c = new Connection();
			$con = $c->getConnection();
			$itens = array(
				'id' => $grupo->getIdGrupo(),
				'nome' => $grupo->getNome(),
				'slug' => $grupo->getSlug(),
				'tipo' => $grupo->getTipo(),
			);
			$query = "UPDATE {$this->db['database']}.grupos
					SET
						nome = :nome, slug = :slug, tipo = :tipo
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

	public function deleteGrupo($grupo) {
		try {
			$c = new Connection();
			$con = $c->getConnection();
			$id = $grupo->getIdGrupo();
			$query = "DELETE FROM {$this->db['database']}.grupos WHERE id = :id;";
			$stmt = $con->prepare($query);
			$stmt->bindValue(":id", $id);
			$stmt->execute();
			include "pages/grupo/excluir-confirmar.html.php";

		} catch (Exception $e) {
			echo "Erro: " . $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function getGrupos() {
		try {
			$c = new Connection();
			$con = $c->getConnection();
			$query = "SELECT * FROM {$this->db['database']}.grupos ORDER BY nome;";
			$result = $con->query($query);
			return $result->fetchAll(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo "Erro: " . $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function getGrupoById($id) {
		try {
			$c = new Connection();
			$con = $c->getConnection();
			$query = "SELECT * FROM {$this->db['database']}.grupos WHERE id = :id;";
			$stmt = $con->prepare($query);
			$stmt->bindValue(":id", $id);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo "Erro: " . $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}
}