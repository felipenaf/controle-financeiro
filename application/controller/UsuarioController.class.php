<?php

class UsuarioController {

	public static function verificaLogin($login, $senha) {
		$u = new UsuarioModel();
		$u->setLogin($login);
		$u->setSenha($senha);
		$consulta = new UsuarioConsulta();
		return $consulta->verificaLogin($u);
	}

	public static function insertUsuario($usuario) {
		$u = new UsuarioModel();
		$u->setLogin($usuario['login']);
		$u->setSenha(md5($usuario['senha']));
		$u->setNome($usuario['nome']);
		$consulta = new UsuarioConsulta();
		return $consulta->insertUsuario($u);
	}
}