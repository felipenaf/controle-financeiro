<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

$url = explode("/", $_GET['page']);

if (!empty($url[2])) {
	$produto = ProdutoController::getProdutoById($url[2]);
}

include "excluir.html.php";