<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

$url = explode("/", $_GET['page']);

ProdutoController::deleteProduto($url[2]);
