<?php

class UsuarioController {

	public static function verificaLogin($login, $senha) {
		$u = new UsuarioModel();
		$u->setLogin($login);
		$u->setSenha($senha);
		$consulta = new UsuarioConsulta();
		return $consulta->verificaLogin($u);
	}
}