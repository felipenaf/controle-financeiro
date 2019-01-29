<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";

$url = explode("/", $_GET['page']);

if (!empty($url[2])) {
	$grupo = GrupoController::getGrupoById($url[2]);
}

include "excluir.html.php";