<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

$url = explode("/", $_GET['page']);

$produto = ProdutoController::getProdutoById($url[1]);

include "$page[0].html.php";