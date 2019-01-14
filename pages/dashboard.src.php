<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/ProdutoController.class.php";

$grupos = GrupoController::getGrupos();
$produtos = ProdutoController::getProdutos();

foreach ($produtos as $produto) {
	foreach ($grupos as $key => $grupo) {
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-01-01" && $produto['data_criacao'] < "2019-01-31")) {
			$grupos[$key]['jan'] = $grupos[$key]['jan'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-02-01" && $produto['data_criacao'] < "2019-02-28")) {
			$grupos[$key]['fev'] = $grupos[$key]['fev'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-03-01" && $produto['data_criacao'] < "2019-03-31")) {
			$grupos[$key]['mar'] = $grupos[$key]['mar'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-04-01" && $produto['data_criacao'] < "2019-04-30")) {
			$grupos[$key]['abr'] = $grupos[$key]['abr'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-05-01" && $produto['data_criacao'] < "2019-05-31")) {
			$grupos[$key]['mai'] = $grupos[$key]['mai'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-06-01" && $produto['data_criacao'] < "2019-06-30")) {
			$grupos[$key]['jun'] = $grupos[$key]['jun'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-07-01" && $produto['data_criacao'] < "2019-07-31")) {
			$grupos[$key]['jul'] = $grupos[$key]['jul'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-08-01" && $produto['data_criacao'] < "2019-08-31")) {
			$grupos[$key]['ago'] = $grupos[$key]['ago'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-09-01" && $produto['data_criacao'] < "2019-09-30")) {
			$grupos[$key]['set'] = $grupos[$key]['set'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-10-01" && $produto['data_criacao'] < "2019-10-31")) {
			$grupos[$key]['out'] = $grupos[$key]['out'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-11-01" && $produto['data_criacao'] < "2019-11-30")) {
			$grupos[$key]['nov'] = $grupos[$key]['nov'] + $produto['valor'];
		}
		if (($produto['grupo'] == $grupo['nome']) && ($produto['data_criacao'] > "2019-12-01" && $produto['data_criacao'] < "2019-12-31")) {
			$grupos[$key]['dez'] = $grupos[$key]['dez'] + $produto['valor'];
		}

	}
}

include_once ROOT_PATH . "/pages/$page[0].html.php";