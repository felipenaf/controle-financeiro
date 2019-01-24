<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/model/db/Connection.class.php";
require $_SERVER['DOCUMENT_ROOT'] . "/model/Grupo/GrupoModel.class.php";

class GrupoConsulta {

	public function insertGrupo($grupo) {
		try {

			$c = new Connection();
			$con = $c->getConnection();

			$itens = array(
				'nome' => $grupo->getNome(),
				'slug' => $grupo->getSlug(),
				'tipo' => $grupo->getTipo(),
			);

			$query = 'INSERT INTO controle_financeiro.grupo
						(nome, slug, tipo)
					VALUES
						(:nome, :slug, :tipo);';

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

			$query = 'UPDATE controle_financeiro.grupo
					SET
						nome = :nome, slug = :slug, tipo = :tipo
					WHERE
						id_grupo = :id_grupo;';

			$con = $con->prepare($query);
			$con->execute($itens);

			include "pages/sucesso.src.php";

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function deleteGrupo() {

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