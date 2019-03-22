<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/_templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/_templates/header.html.php"?>
		<main class="container">

			<div class="space-10"></div>
			<div class="container center dashboard-receita"><?php var_dump($_SESSION['usuario'])?></div>
			<div class="space-5"></div>

			<table class="dashboard-table" cellspacing="5">
				<tr>
					<td class="first-column"></td>
					<th>JAN</th>
					<th>FEV</th>
					<th>MAR</th>
					<th>ABR</th>
					<th>MAI</th>
					<th>JUN</th>
					<th>JUL</th>
					<th>AGO</th>
					<th>SET</th>
					<th>OUT</th>
					<th>NOV</th>
					<th>DEZ</th>
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
					<td class="first-column"></td>
					<th>JAN</th>
					<th>FEV</th>
					<th>MAR</th>
					<th>ABR</th>
					<th>MAI</th>
					<th>JUN</th>
					<th>JUL</th>
					<th>AGO</th>
					<th>SET</th>
					<th>OUT</th>
					<th>NOV</th>
					<th>DEZ</th>
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
					<td class="first-column"></td>
					<th>JAN</th>
					<th>FEV</th>
					<th>MAR</th>
					<th>ABR</th>
					<th>MAI</th>
					<th>JUN</th>
					<th>JUL</th>
					<th>AGO</th>
					<th>SET</th>
					<th>OUT</th>
					<th>NOV</th>
					<th>DEZ</th>
				</tr>

				<tr>
					<td class="grupo">TOTAL</td>
					<td> R$ <?=number_format($totalMes['jan'], 2)?></td>
					<td> R$ <?=number_format($totalMes['fev'], 2)?></td>
					<td> R$ <?=number_format($totalMes['mar'], 2)?></td>
					<td> R$ <?=number_format($totalMes['abr'], 2)?></td>
					<td> R$ <?=number_format($totalMes['mai'], 2)?></td>
					<td> R$ <?=number_format($totalMes['jun'], 2)?></td>
					<td> R$ <?=number_format($totalMes['jul'], 2)?></td>
					<td> R$ <?=number_format($totalMes['ago'], 2)?></td>
					<td> R$ <?=number_format($totalMes['set'], 2)?></td>
					<td> R$ <?=number_format($totalMes['out'], 2)?></td>
					<td> R$ <?=number_format($totalMes['nov'], 2)?></td>
					<td> R$ <?=number_format($totalMes['dez'], 2)?></td>
				</tr>

			</table>


			<div class="space-10"></div>
		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>