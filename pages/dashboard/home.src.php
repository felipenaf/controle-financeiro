<?php

$grupos = GrupoController::getGrupos();
$produtos = ProdutoController::getProdutos();

foreach ($produtos as $produto) {
	foreach ($grupos as $key => $grupo) {
		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-01-01" && $produto['data_criacao'] <= "2019-01-31")) {
			$grupos[$key]['jan'] = $grupos[$key]['jan'] + $produto['valor'];
			if ($grupo['tipo'] == 0) {
				$totalMesSaida['jan'] = $totalMesSaida['jan'] + $produto['valor'];
			} else {
				$totalMesEntrada['jan'] = $totalMesEntrada['jan'] + $produto['valor'];
			}
			$totalMes['jan'] = $totalMesEntrada['jan'] - $totalMesSaida['jan'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-02-01" && $produto['data_criacao'] <= "2019-02-28")) {
			$grupos[$key]['fev'] = $grupos[$key]['fev'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['fev'] = $totalMesSaida['fev'] + $produto['valor'];
			} else {
				$totalMesEntrada['fev'] = $totalMesEntrada['fev'] + $produto['valor'];
			}
			$totalMes['fev'] = $totalMesEntrada['fev'] - $totalMesSaida['fev'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-03-01" && $produto['data_criacao'] <= "2019-03-31")) {
			$grupos[$key]['mar'] = $grupos[$key]['mar'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['mar'] = $totalMesSaida['mar'] + $produto['valor'];
			} else {
				$totalMesEntrada['mar'] = $totalMesEntrada['mar'] + $produto['valor'];
			}
			$totalMes['mar'] = $totalMesEntrada['mar'] - $totalMesSaida['mar'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-04-01" && $produto['data_criacao'] <= "2019-04-30")) {
			$grupos[$key]['abr'] = $grupos[$key]['abr'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['abr'] = $totalMesSaida['abr'] + $produto['valor'];
			} else {
				$totalMesEntrada['abr'] = $totalMesEntrada['abr'] + $produto['valor'];
			}
			$totalMes['abr'] = $totalMesEntrada['abr'] - $totalMesSaida['abr'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-05-01" && $produto['data_criacao'] <= "2019-05-31")) {
			$grupos[$key]['mai'] = $grupos[$key]['mai'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['mai'] = $totalMesSaida['mai'] + $produto['valor'];
			} else {
				$totalMesEntrada['mai'] = $totalMesEntrada['mai'] + $produto['valor'];
			}
			$totalMes['mai'] = $totalMesEntrada['mai'] - $totalMesSaida['mai'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-06-01" && $produto['data_criacao'] <= "2019-06-30")) {
			$grupos[$key]['jun'] = $grupos[$key]['jun'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['jun'] = $totalMesSaida['jun'] + $produto['valor'];
			} else {
				$totalMesEntrada['jun'] = $totalMesEntrada['jun'] + $produto['valor'];
			}
			$totalMes['jun'] = $totalMesEntrada['jun'] - $totalMesSaida['jun'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-07-01" && $produto['data_criacao'] <= "2019-07-31")) {
			$grupos[$key]['jul'] = $grupos[$key]['jul'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['jul'] = $totalMesSaida['jul'] + $produto['valor'];
			} else {
				$totalMesEntrada['jul'] = $totalMesEntrada['jul'] + $produto['valor'];
			}
			$totalMes['jul'] = $totalMesEntrada['jul'] - $totalMesSaida['jul'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-08-01" && $produto['data_criacao'] <= "2019-08-31")) {
			$grupos[$key]['ago'] = $grupos[$key]['ago'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['ago'] = $totalMesSaida['ago'] + $produto['valor'];
			} else {
				$totalMesEntrada['ago'] = $totalMesEntrada['ago'] + $produto['valor'];
			}
			$totalMes['ago'] = $totalMesEntrada['ago'] - $totalMesSaida['ago'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-09-01" && $produto['data_criacao'] <= "2019-09-30")) {
			$grupos[$key]['set'] = $grupos[$key]['set'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['set'] = $totalMesSaida['set'] + $produto['valor'];
			} else {
				$totalMesEntrada['set'] = $totalMesEntrada['set'] + $produto['valor'];
			}
			$totalMes['set'] = $totalMesEntrada['set'] - $totalMesSaida['set'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-10-01" && $produto['data_criacao'] <= "2019-10-31")) {
			$grupos[$key]['out'] = $grupos[$key]['out'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['out'] = $totalMesSaida['out'] + $produto['valor'];
			} else {
				$totalMesEntrada['out'] = $totalMesEntrada['out'] + $produto['valor'];
			}
			$totalMes['out'] = $totalMesEntrada['out'] - $totalMesSaida['out'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-11-01" && $produto['data_criacao'] <= "2019-11-30")) {
			$grupos[$key]['nov'] = $grupos[$key]['nov'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['nov'] = $totalMesSaida['nov'] + $produto['valor'];
			} else {
				$totalMesEntrada['nov'] = $totalMesEntrada['nov'] + $produto['valor'];
			}
			$totalMes['nov'] = $totalMesEntrada['nov'] - $totalMesSaida['nov'];
		}

		if (($produto['id_grupo'] == $grupo['id_grupo']) && ($produto['data_criacao'] >= "2019-12-01" && $produto['data_criacao'] <= "2019-12-31")) {
			$grupos[$key]['dez'] = $grupos[$key]['dez'] + $produto['valor'];

			if ($grupo['tipo'] == 0) {
				$totalMesSaida['dez'] = $totalMesSaida['dez'] + $produto['valor'];
			} else {
				$totalMesEntrada['dez'] = $totalMesEntrada['dez'] + $produto['valor'];
			}
			$totalMes['dez'] = $totalMesEntrada['dez'] - $totalMesSaida['dez'];
		}
	}
}

$totalMes = array_reverse($totalMes);
include_once "home.html.php";
