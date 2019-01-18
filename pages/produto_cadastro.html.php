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
							<input type="date" class="form-control" id="data_criacao" name="data_criacao" value="<?=date('Y-m-d')?>" aria-describedby="data_criacao" required>
						</div>

						<div class="form-group">
							<label for="grupo">Grupo</label>
							<select class="form-control" id="id_grupo" name="id_grupo">
						<?php foreach ($grupos as $grupo): ?>
								<option name="id_grupo" value="<?=$grupo['id_grupo']?>"><?=$grupo['nome']?> - <?=$grupo['tipo'] == 0 ? '(S)' : '(E)'?></option>
						<?php endforeach;?>
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