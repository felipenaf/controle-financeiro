<?php

class UsuarioController {

	public static function insertUsuario($usuario) {
		$u = new UsuarioModel();
		$u->setNome($usuario['nome']);
		$u->setLogin($usuario['login']);
		$u->setSenha(md5($usuario['senha']));
		$consulta = new UsuarioConsulta();
		return $consulta->insertUsuario($u);
	}

	public static function verificaLogin($login) {
		$consulta = new UsuarioConsulta();
		return $consulta->verificaLogin($login);
	}

	public static function verificaLoginSenha($login, $senha) {
		$u = new UsuarioModel();
		$u->setLogin($login);
		$u->setSenha(md5($senha));
		$consulta = new UsuarioConsulta();
		return $consulta->verificaLoginSenha($u);
	}
}