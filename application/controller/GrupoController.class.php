<?php

class GrupoController {

	public static function insertGrupo($grupo) {

		$g = new GrupoModel();
		$g->setNome($grupo['nome']);
		$g->setSlug($grupo['slug']);
		$g->setTipo($grupo['tipo']);

		$consulta = new GrupoConsulta();
		return $consulta->insertGrupo($g);
	}

	public static function updateGrupo($grupo) {

		$g = new GrupoModel();
		$g->setIdGrupo($grupo['id_grupo']);
		$g->setNome($grupo['nome']);
		$g->setSlug($grupo['slug']);
		$g->setTipo($grupo['tipo']);

		$consulta = new GrupoConsulta();
		return $consulta->updateGrupo($g);
	}

	public static function deleteGrupo($id_grupo) {
		$g = new GrupoModel();
		$g->setIdGrupo($id_grupo);

		$consulta = new GrupoConsulta();
		return $consulta->deleteGrupo($g);
	}

	public static function getGrupos() {
		$consulta = new GrupoConsulta();
		return $consulta->getGrupos();
	}

	public static function getGrupoById($id_grupo) {
		$consulta = new GrupoConsulta();
		return $consulta->getGrupoById($id_grupo);
	}

}
