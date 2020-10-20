<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/_templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/_templates/header.html.php"?>
		<main>
			<div class="container">
				<div class="space-10"></div>
				<div class="add-lista">
					<a href="cadastrar">
						<img src="/assets/img/add.png" alt="Add" width="30px">
						<span>Novo</span>
					</a>
				</div>
				<div class="space-10"></div>

					<table class="table-lista">

						<tr>
							<th style="width: 20%;">DESCRIÇÃO</th>
							<th style="width: 10%;">VALOR</th>
							<th style="width: 10%;">GRUPO</th>
							<th style="width: 10%;">DATA</th>
							<th style="width: 70%;">OBSERVAÇÃO</th>
							<th colspan="2"></th>
						</tr>

						<?php foreach ($produtos as $produto): ?>
							<?php if ($produto['grupo']['tipo'] == 0): ?>
								<tr class="red">
							<?php else: ?>
								<tr class="green">
							<?php endif;?>
									<td><?=$produto['descricao']?></td>
									<td>R$ <?=number_format($produto['valor'], 2, ',', '.')?></td>
									<td><?=$produto['grupo']['nome']?></td>
									<td><?=date('d/m/Y', strtotime($produto['data_criacao']))?></td>
									<td><?=$produto['observacao']?></td>
									<td><a href="cadastrar/<?=$produto['id']?>">Editar</a></td>
									<td><a href="excluir/<?=$produto['id']?>">Excluir</a></td>
								</tr>
						<?php endforeach;?>
					</table>

				<div class="space-10"></div>
			</div>
		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>