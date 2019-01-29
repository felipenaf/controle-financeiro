<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/_templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/_templates/header.html.php"?>
		<main class="container">

			<p>Tem certeza que deseja excluir o grupo <strong><?=$grupo['nome']?></strong> ?</p>

			<a href="../excluir-confirmar/<?=$grupo['id_grupo']?>">Sim</a>
			<a href="../lista">Não</a>

		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>