<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/_templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/_templates/header.html.php"?>
		<main>
			<div class="container">
				<div class="space-10"></div>
				<form action="" method="POST">

					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" value="<?=isset($grupo['nome']) ? $grupo['nome'] : ''?>" required>
					</div>

					<div class="form-group">
						<label for="slug">Slug</label>
						<input type="text" class="form-control" name="slug" value="<?=isset($grupo['slug']) ? $grupo['slug'] : ''?>" required>
					</div>

					<div class="form-group">
							<label for="tipo">Tipo</label>
							<select class="form-control" id="tipo" name="tipo">
							<?php if ($grupo['tipo'] == 1): ?>
								<option value="1">Entrada</option>
								<option value="0">Saída</option>
							<?php else: ?>
								<option value="0">Saída</option>
								<option value="1">Entrada</option>
							<?php endif;?>
							</select>
						</div>

					<div class="form-group">
						<?php if (isset($grupo)): ?>
							<input type="hidden" name="id_grupo" value="<?=$grupo['id_grupo']?>">
							<button class="form-control" type="submit" name="botao" value="alterar">Salvar</button>
						<?php else: ?>
							<button class="form-control" type="submit" name="botao" value="salvar">Salvar</button>
						<?php endif;?>
					</div>

					<div class="space-10"></div>
				</form>
			</div>
		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>