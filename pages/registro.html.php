<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/templates/header.html.php"?>
		<main>
			<div class="container" style="background-color: lightgray;">
				<div class="col-md-5">
					<div class="space-10"></div>
					<form action="" method="POST">

						<div class="form-group">
							<label for="descricao">Descrição</label>
							<input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricao" placeholder="ex. Almoço, chocolate, etc..." required>
						</div>

						<div class="form-group">
							<label for="data_criacao">Data</label>
							<input type="date" class="form-control" id="data_criacao" name="data_criacao" aria-describedby="data_criacao" required>
						</div>

						<div class="form-group">
							<label for="grupo">Grupo</label>
							<select class="form-control" id="grupo" name="grupo">
								<option value="outros">Outros</option>
								<option value="uninove">Uninove</option>
								<option value="aml">Aml</option>
							</select>
						</div>

						<div class="form-group">
							<label for="valor">Valor</label>
							<input type="number" class="form-control" id="valor" name="valor" aria-describedby="valor" step=0.01 required>
						</div>

						<div class="form-group">
							<label for="observacao">Observação</label>
							<textarea type="text" class="form-control" id="observacao" name="observacao" aria-describedby="observacao"></textarea>
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
			</div>
		</main>

		<?php include_once ROOT_PATH . "/pages/templates/footer.html.php"?>
	</body>
</html>