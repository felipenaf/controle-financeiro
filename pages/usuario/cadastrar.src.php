<?php

if ($_POST) {
	UsuarioController::insertUsuario($_POST);
} else {
	include "cadastrar.html.php";
}
