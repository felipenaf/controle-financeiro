<?php

if ($_POST) {
	include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

	// var_dump($_POST);
	ProdutoController::insertProduto($_POST);

	include "registro.html.php";

} else {
	include "registro.html.php";
}
