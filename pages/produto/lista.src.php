<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

$produtos = ProdutoController::getProdutos();

$grupos = GrupoController::getGrupos();
include "lista.html.php";
