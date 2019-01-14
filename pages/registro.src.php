<?php

if ($_POST) {
	include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

	ProdutoController::insertProduto($_POST);

} else {
	include "registro.html.php";
}
