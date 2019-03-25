<?php

$produtos = ProdutoController::getProdutos($_SESSION['usuario']['id_usuario']);

foreach ($produtos as $key => $produto) {
	$produtos[$key]['grupo'] = GrupoController::getGrupoById($produto['id_grupo']);
}

include "lista.html.php";
