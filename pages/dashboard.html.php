<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/templates/header.html.php"?>
		<main class="container-fluid">

			<div class="space-10"></div>
			<div class="container center dashboard-receita">RECEITA</div>
			<div class="space-5"></div>

			<table class="dashboard-table" cellspacing="5">
				<tr>
					<td></td>
					<td>JAN</td>
					<td>FEV</td>
					<td>MAR</td>
					<td>ABR</td>
					<td>MAI</td>
					<td>JUN</td>
					<td>JUL</td>
					<td>AGO</td>
					<td>SET</td>
					<td>OUT</td>
					<td>NOV</td>
					<td>DEZ</td>
				</tr>
<?php foreach ($grupos as $grupo): ?>
<?php if ($grupo['tipo'] == 1): ?>
				<tr>
					<td class="grupo"><?=$grupo['nome']?></td>
					<td> R$ <?=number_format($grupo['jan'], 2)?></td>
					<td> R$ <?=number_format($grupo['fev'], 2)?></td>
					<td> R$ <?=number_format($grupo['mar'], 2)?></td>
					<td> R$ <?=number_format($grupo['abr'], 2)?></td>
					<td> R$ <?=number_format($grupo['mai'], 2)?></td>
					<td> R$ <?=number_format($grupo['jun'], 2)?></td>
					<td> R$ <?=number_format($grupo['jul'], 2)?></td>
					<td> R$ <?=number_format($grupo['ago'], 2)?></td>
					<td> R$ <?=number_format($grupo['set'], 2)?></td>
					<td> R$ <?=number_format($grupo['out'], 2)?></td>
					<td> R$ <?=number_format($grupo['nov'], 2)?></td>
					<td> R$ <?=number_format($grupo['dez'], 2)?></td>
<?php endif;?>
<?php endforeach;?>
				</tr>

				<tr><td class="space-td"></td></tr>

				<tr>
					<td class="grupo">TOTAL</td>
					<td> R$ <?=number_format($totalMesEntrada['jan'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['fev'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['mar'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['abr'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['mai'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['jun'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['jul'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['ago'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['set'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['out'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['nov'], 2)?></td>
					<td> R$ <?=number_format($totalMesEntrada['dez'], 2)?></td>
				</tr>
			</table>

			<div class="space-10"></div>
			<div class="container center dashboard-despesa">DESPESA</div>
			<div class="space-5"></div>

			<table class="dashboard-table" cellspacing="5">
				<tr>
					<td></td>
					<td>JAN</td>
					<td>FEV</td>
					<td>MAR</td>
					<td>ABR</td>
					<td>MAI</td>
					<td>JUN</td>
					<td>JUL</td>
					<td>AGO</td>
					<td>SET</td>
					<td>OUT</td>
					<td>NOV</td>
					<td>DEZ</td>
				</tr>
<?php foreach ($grupos as $grupo): ?>
<?php if ($grupo['tipo'] == 0): ?>
				<tr>
					<td class="grupo"><?=$grupo['nome']?></td>
					<td> R$ <?=number_format($grupo['jan'], 2)?></td>
					<td> R$ <?=number_format($grupo['fev'], 2)?></td>
					<td> R$ <?=number_format($grupo['mar'], 2)?></td>
					<td> R$ <?=number_format($grupo['abr'], 2)?></td>
					<td> R$ <?=number_format($grupo['mai'], 2)?></td>
					<td> R$ <?=number_format($grupo['jun'], 2)?></td>
					<td> R$ <?=number_format($grupo['jul'], 2)?></td>
					<td> R$ <?=number_format($grupo['ago'], 2)?></td>
					<td> R$ <?=number_format($grupo['set'], 2)?></td>
					<td> R$ <?=number_format($grupo['out'], 2)?></td>
					<td> R$ <?=number_format($grupo['nov'], 2)?></td>
					<td> R$ <?=number_format($grupo['dez'], 2)?></td>
<?php endif;?>
<?php endforeach;?>
				</tr>

				<tr><td class="space-td"></td></tr>

				<tr>
					<td class="grupo">TOTAL</td>
					<td> R$ <?=number_format($totalMesSaida['jan'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['fev'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['mar'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['abr'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['mai'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['jun'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['jul'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['ago'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['set'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['out'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['nov'], 2)?></td>
					<td> R$ <?=number_format($totalMesSaida['dez'], 2)?></td>
				</tr>
			</table>

			<div class="space-10"></div>
			<div class="container center dashboard-saldo">SALDO</div>
			<div class="space-5"></div>

			<table class="dashboard-table">

				<tr>
					<td></td>
					<td>JAN</td>
					<td>FEV</td>
					<td>MAR</td>
					<td>ABR</td>
					<td>MAI</td>
					<td>JUN</td>
					<td>JUL</td>
					<td>AGO</td>
					<td>SET</td>
					<td>OUT</td>
					<td>NOV</td>
					<td>DEZ</td>
				</tr>

				<tr>
					<td class="grupo">TOTAL</td>
					<td>R$ <?=number_format($totalMesEntrada['jan'] - $totalMesSaida['jan'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['fev'] - $totalMesSaida['fev'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['mar'] - $totalMesSaida['mar'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['abr'] - $totalMesSaida['abr'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['mai'] - $totalMesSaida['mai'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['jun'] - $totalMesSaida['jun'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['jul'] - $totalMesSaida['jul'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['ago'] - $totalMesSaida['ago'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['set'] - $totalMesSaida['set'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['out'] - $totalMesSaida['out'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['nov'] - $totalMesSaida['nov'], 2)?></td>
					<td>R$ <?=number_format($totalMesEntrada['dez'] - $totalMesSaida['dez'], 2)?></td>
				</tr>

			</table>


			<div class="space-10"></div>
		</main>

		<?php include_once ROOT_PATH . "/pages/templates/footer.html.php"?>
	</body>
</html>