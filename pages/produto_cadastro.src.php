<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

if ($_POST) {
	ProdutoController::insertProduto($_POST);
} else {
	$grupos = GrupoController::getGrupos();
	include "$page[0].html.php";
}
