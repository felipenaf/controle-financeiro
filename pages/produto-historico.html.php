<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/templates/header.html.php"?>
		<main>
			<div class="container">
				<div class="space-10"></div>
					<table border="2" class="produto-historico">

						<tr class="produto-historico-title">
							<td style="width: 20%;">DESCRIÇÃO</td>
							<td style="width: 10%;">VALOR</td>
							<td style="width: 10%;">GRUPO</td>
							<td style="width: 10%;">DATA</td>
							<td style="width: 70%;">OBSERVAÇÃO</td>
							<td colspan="2"></td>
						</tr>

					<?php foreach ($produtos as $produto): ?>
						<tr>
							<td><?=$produto['descricao']?></td>
							<td>R$ <?=number_format($produto['valor'], 2, ',', '.')?></td>
							<td><?=GrupoController::getGrupoById($produto['id_grupo'])['nome']?></td>
							<td><?=date('d/m/Y', strtotime($produto['data_criacao']))?></td>
							<td><?=$produto['observacao']?></td>
							<td><a href="/produto-cadastro/<?=$produto['id_produto']?>">Editar</a></td>
							<td><a href="">Excluir</a></td>
						</tr>
					<?php endforeach;?>
					</table>

				<div class="space-10"></div>
			</div>
		</main>

		<?php include_once ROOT_PATH . "/pages/templates/footer.html.php"?>
	</body>
</html>