<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/_templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/_templates/header.html.php"?>
		<main class="container">

			<p>Tem certeza que deseja excluir o produto <strong><?=$produto['descricao']?></strong> com data de <strong><?=date('d/m/Y', strtotime($produto['data_criacao']))?></strong> ?</p>

			<a href="../excluir-confirmar/<?=$produto['id']?>">Sim</a>
			<a href="../lista">Não</a>

		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>