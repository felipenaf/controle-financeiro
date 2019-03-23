<?php

if ($_POST) {
	$usuario = UsuarioController::verificaLogin($_POST['login'], $_POST['senha']);
	if (!empty($usuario)) {
		$_SESSION['usuario'] = $usuario;
		header("location: /");
	} else {
		$_GET['erro'] = 1;
		header("location: login&erro=1");
	}
} else {
	include "login.html.php";
}
