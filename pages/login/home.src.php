<?php

if ($_GET['erro'] == "1") {
	echo "<h1>Usuário ou senha incorreto !!</h1>";
}

if ($_POST) {
	$usuario = UsuarioController::verificaLogin($_POST['login'], $_POST['senha']);
	if (!empty($usuario)) {
		$_SESSION['usuario'] = $usuario;
		header("location: dashboard/home");
	} else {
		$_GET['erro'] = 1;
		header("location: /login?erro=1");
	}
} else {
	include_once "home.html.php";
}
