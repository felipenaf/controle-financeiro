<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/model/Grupo/GrupoConsulta.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/model/Grupo/GrupoModel.class.php";

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

	public static function getGrupos() {
		$consulta = new GrupoConsulta();
		return $consulta->getGrupos();
	}

	public static function getGrupoById($id_grupo) {
		$consulta = new GrupoConsulta();
		return $consulta->getGrupoById($id_grupo);
	}

}
