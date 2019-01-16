<?php

if ($_POST) {
	include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

	ProdutoController::insertProduto($_POST);

} else {
	include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";

	$grupos = GrupoController::getGrupos();

	include "registro.html.php";
}
