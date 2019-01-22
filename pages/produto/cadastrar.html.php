<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/_templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/_templates/header.html.php"?>
		<main>
			<div class="container">
				<div class="col-md-5">
					<div class="space-10"></div>
					<form action="" method="POST">

						<div class="form-group">
							<label for="descricao">Descrição</label>
							<input type="text" class="form-control" id="descricao" name="descricao" value="<?=isset($produto['descricao']) ? $produto['descricao'] : ''?>" placeholder="ex. Almoço, chocolate, etc..." required>
						</div>

						<div class="form-group">
							<label for="data_criacao">Data</label>
							<input type="date" class="form-control" id="data_criacao" name="data_criacao" value="<?=isset($produto['data_criacao']) ? date('Y-m-d', strtotime($produto['data_criacao'])) : date('Y-m-d')?>" aria-describedby="data_criacao" required>
						</div>

						<div class="form-group">
							<label for="grupo">Grupo</label>
							<select class="form-control" id="id_grupo" name="id_grupo">
						<?php foreach ($grupos as $grupo): ?>
							<?php if (isset($produto) && $produto['id_grupo'] == $grupo['id_grupo']): ?>
								<option name="id_grupo" value="<?=$grupo['id_grupo']?>" selected><?=$grupo['nome']?> - <?=$grupo['tipo'] == 0 ? '(S)' : '(E)'?></option>
							<?php else: ?>
								<option name="id_grupo" value="<?=$grupo['id_grupo']?>"><?=$grupo['nome']?> - <?=$grupo['tipo'] == 0 ? '(S)' : '(E)'?></option>
							<?php endif;?>
						<?php endforeach;?>
							</select>
						</div>

						<div class="form-group">
							<label for="valor">Valor</label>
							<input type="number" class="form-control" id="valor" name="valor" value="<?=isset($produto['valor']) ? $produto['valor'] : ''?>" step=0.01 required>
						</div>

						<div class="form-group">
							<label for="observacao">Observação</label>
							<textarea cols="30" rows="10" type="text" class="form-control" id="observacao" name="observacao"><?=isset($produto['observacao']) ? $produto['observacao'] : ''?></textarea>
						</div>

						<div class="form-group">
						<?php if (isset($produto)): ?>
							<input type="hidden" name="id_produto" value="<?=$produto['id_produto']?>">
							<button class="form-control" name="botao" type="submit" value="alterar">Salvar</button>
						<?php else: ?>
							<button class="form-control" name="botao" type="submit" value="salvar">Salvar</button>
						<?php endif;?>
						</div>

						<div class="space-10"></div>
					</form>
				</div>
			</div>
		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>