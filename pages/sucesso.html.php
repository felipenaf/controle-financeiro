<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/_templates/head.html.php"?>
	<body>
		<?php include_once ROOT_PATH . "/pages/_templates/header.html.php"?>
		<main class="container">

			<h1>Dados salvos com sucesso.</h1>
			<a href="/<?=explode('/', $_GET['page'])[0]?>/lista"><img src="/assets/img/voltar.png" alt="Voltar" width="50px" title="Voltar"></a>

		</main>

		<?php include_once ROOT_PATH . "/pages/_templates/footer.html.php"?>
	</body>
</html>