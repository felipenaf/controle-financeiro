<?php

class UsuarioModel {

	private $id_usuario;
	private $login;
	private $senha;
	private $nome;

	/**
	 * Get the value of id_usuario
	 */
	public function getIdUsuario() {
		return $this->id_usuario;
	}

	/**
	 * Set the value of id_usuario
	 *
	 * @return  self
	 */
	public function setIdUsuario($id_usuario) {
		$this->id_usuario = $id_usuario;
	}

	/**
	 * Get the value of nome
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 *
	 * @return  self
	 */
	public function setNome($nome) {
		$this->nome = $nome;
	}

	/**
	 * Get the value of login
	 */
	public function getLogin() {
		return $this->login;
	}

	/**
	 * Set the value of login
	 *
	 * @return  self
	 */
	public function setLogin($login) {
		$this->login = $login;
	}

	/**
	 * Get the value of senha
	 */
	public function getSenha() {
		return $this->senha;
	}

	/**
	 * Set the value of senha
	 *
	 * @return  self
	 */
	public function setSenha($senha) {
		$this->senha = $senha;
	}

}