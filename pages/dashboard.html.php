<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/templates/header.html.php"?>
		<main class="container-fluid">

			<div class="space-10"></div>
			<div class="container center dashboard-receita">RECEITA</div>
			<div class="space-10"></div>

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
			</table>

			<div class="space-10"></div>

		</main>

		<?php include_once ROOT_PATH . "/pages/templates/footer.html.php"?>
	</body>
</html>