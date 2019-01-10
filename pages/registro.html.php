<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/templates/header.html.php"?>
		<main>
			<div class="container" style="background-color: lightgray;">
				<div class="col-md-5">
					<div class="p-2"></div>
					<form action="" method="POST">
						<div class="form-group">
							<label for="descricao">Descrição</label>
							<input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricao" placeholder="ex. Almoço, chocolate, etc...">
						</div>

						<div class="form-group w-50">
							<label for="data">Data</label>
							<input type="date" class="form-control" id="data" name="data" aria-describedby="data">
						</div>

						<div class="form-group">
							<label for="grupo">Grupo</label>
							<div class="input-group mb-3">
								<select class="custom-select" id="grupo" name="grupo">
									<option selected>Escolha...</option>
									<option value="uninove">Uninove</option>
									<option value="aml">Aml</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="valor">Valor</label>
							<input type="number" class="form-control" id="valor" name="valor" aria-describedby="valor" step=0.01>
						</div>

						<div class="form-group">
							<label for="observacao">Observação</label>
							<textarea type="text" class="form-control" id="observacao" name="observacao" aria-describedby="observacao"></textarea>
						</div>

						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<label class="input-group-text" for="tipo">Tipo</label>
								</div>
								<select class="custom-select" id="tipo" name="tipo">
									<option selected>Escolha...</option>
									<option value="1">Entrada</option>
									<option value="0">Saída</option>
								</select>
							</div>
						</div>
						<button class="btn btn-outline-primary" type="submit" value="salvar">Salvar</button>
						<div class="p-2"></div>
					</form>
				</div>
			</div>
		</main>

		<?php include_once ROOT_PATH . "/pages/templates/footer.html.php"?>
	</body>
</html>