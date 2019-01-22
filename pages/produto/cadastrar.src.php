<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

if ($_POST) {
	if ($_POST['botao'] == 'alterar') {
		ProdutoController::updateProduto($_POST);
	} else {
		ProdutoController::insertProduto($_POST);
	}

} else {
	$url = explode("/", $_GET['page']);

	if (!empty($url[2])) {
		$produto = ProdutoController::getProdutoById($url[2]);
	}

	$grupos = GrupoController::getGrupos();

	include "cadastrar.html.php";
}
