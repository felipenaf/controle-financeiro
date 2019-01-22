<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/_templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/_templates/header.html.php"?>
		<main class="container">

			<p>Tem certeza que deseja excluir o(a) <?=$produto['descricao']?> com data de <?=date('d-m-Y', strtotime($produto['data_criacao']))?></p>

			<a href="?sim">Sim</a>
			<a href="?nao">Não</a>

		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>