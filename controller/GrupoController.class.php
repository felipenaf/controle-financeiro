<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/model/Grupo/GrupoConsulta.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/model/Grupo/GrupoModel.class.php";

class GrupoController {

	public static function getGrupos() {
		$consulta = new GrupoConsulta();
		return $consulta->getGrupos();
	}

	public static function getGrupoById($id_grupo) {
		$consulta = new GrupoConsulta();
		return $consulta->getGrupoById($id_grupo);
	}

}
