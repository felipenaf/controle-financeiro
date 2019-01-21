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

	if (!empty($url[1])) {
		$produto = ProdutoController::getProdutoById($url[1]);
	}

	$grupos = GrupoController::getGrupos();
	include "$page[0].html.php";
}
