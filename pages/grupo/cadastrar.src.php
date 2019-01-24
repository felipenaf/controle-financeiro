<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

if ($_POST) {
	if ($_POST['botao'] == 'alterar') {
		GrupoController::updateGrupo($_POST);
	} else {
		GrupoController::insertGrupo($_POST);
	}
} else {
	$url = explode("/", $_GET['page']);

	if (!empty($url[2])) {
		$grupo = GrupoController::getGrupoById($url[2]);
	}

	include "cadastrar.html.php";
}
