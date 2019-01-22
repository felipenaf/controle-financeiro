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
						<input type="text" class="form-control" name="nome" required>
					</div>

					<div class="form-group">
						<label for="slug">Slug</label>
						<input type="text" class="form-control" name="slug" required>
					</div>

					<div class="form-group">
							<label for="tipo">Tipo</label>
							<select class="form-control" id="tipo" name="tipo">
								<option value="0">Saída</option>
								<option value="1">Entrada</option>
							</select>
						</div>

					<div class="form-group">
						<button class="form-control" type="submit" value="salvar">Salvar</button>
					</div>

					<div class="space-10"></div>
				</form>
			</div>
		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>