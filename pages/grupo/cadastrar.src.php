<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

if ($_POST) {
	GrupoController::insertGrupo($_POST);
} else {
	include "cadastrar.html.php";
}
