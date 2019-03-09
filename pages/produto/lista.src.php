<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

$produtos = ProdutoController::getProdutos();

foreach ($produtos as $key => $produto) {
	$produtos[$key]['grupo'] = GrupoController::getGrupoById($produto['id_grupo'])['nome'];
}

include "lista.html.php";
