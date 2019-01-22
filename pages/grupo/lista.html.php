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
						<img src="/style/img/add.png" alt="Add" width="30px">
						<span>Novo</span>
					</a>
				</div>
				<div class="space-10"></div>

					<table style="width:50%; text-align:center;" class="table-lista" >

						<tr>
							<th style="width: 20%;">NOME</th>
							<th style="width: 20%;">SLUG</th>
							<th style="width: 20%;">TIPO</th>
							<th style="width: 5%;" colspan="2"></th>
						</tr>

					<?php foreach ($grupos as $grupo): ?>
						<tr>
							<td><?=$grupo['nome']?></td>
							<td><?=$grupo['slug']?></td>
							<td><?=$grupo['tipo'] == 0 ? 'Saída' : 'Entrada'?></td>
							<td><a href="cadastrar/<?=$grupo['id_grupo']?>">Editar</a></td>
							<td><a href="excluir/<?=$grupo['id_grupo']?>">Excluir</a></td>
						</tr>
					<?php endforeach;?>
					</table>

				<div class="space-10"></div>
			</div>
		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>