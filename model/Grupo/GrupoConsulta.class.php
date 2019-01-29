<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/model/db/Connection.class.php";
require $_SERVER['DOCUMENT_ROOT'] . "/model/Grupo/GrupoModel.class.php";

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

			$query = "INSERT INTO {$this->db['database']}.grupo
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
				'id_grupo' => $grupo->getIdGrupo(),
				'nome' => $grupo->getNome(),
				'slug' => $grupo->getSlug(),
				'tipo' => $grupo->getTipo(),
			);

			$query = "UPDATE {$this->db['database']}.grupo
					SET
						nome = :nome, slug = :slug, tipo = :tipo
					WHERE
						id_grupo = :id_grupo;";

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

			$query = "DELETE FROM {$this->db['database']}.grupo WHERE id_grupo = {$grupo->getIdGrupo()};";

			$con->query($query);

			include "pages/grupo/excluir-confirmar.html.php";

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function getGrupos() {

		$c = new Connection();
		$con = $c->getConnection();

		$query = "SELECT * FROM {$this->db['database']}.grupo ORDER BY nome;";

		$result = $con->query($query);

		return $result->fetchAll(PDO::FETCH_ASSOC);

	}

	public function getGrupoById($id_grupo) {

		$c = new Connection();
		$con = $c->getConnection();

		$query = "SELECT * FROM {$this->db['database']}.grupo WHERE id_grupo = $id_grupo;";

		$result = $con->query($query);

		return $result->fetch(PDO::FETCH_ASSOC);

	}

}