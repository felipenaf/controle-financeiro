<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/model/db/Connection.class.php";
require $_SERVER['DOCUMENT_ROOT'] . "/model/Grupo/GrupoModel.class.php";

class GrupoConsulta {

	public function __construct() {
	}

	public function insertGrupo() {

	}

	public function deleteGrupo() {

	}

	public function updateGrupo() {

	}

	public function getGrupos() {

		$c = new Connection();
		$con = $c->getConnection();

		$query = "SELECT * FROM controle_financeiro.grupo ORDER BY nome;";

		$result = $con->query($query);

		return $result->fetchAll(PDO::FETCH_ASSOC);

	}

	public function getGrupoById($id_grupo) {

		$c = new Connection();
		$con = $c->getConnection();

		$query = "SELECT * FROM controle_financeiro.grupo WHERE id_grupo = $id_grupo;";

		$result = $con->query($query);

		return $result->fetch(PDO::FETCH_ASSOC);

	}

}