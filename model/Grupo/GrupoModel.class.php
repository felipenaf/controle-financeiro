<?php

class GrupoModel {

	private $id_grupo;
	private $nome;
	private $slug;
	private $tipo;

	/**
	 * Get the value of id_grupo
	 */
	public function getIdGrupo() {
		return $this->id_grupo;
	}

	/**
	 * Set the value of id_grupo
	 *
	 * @return  self
	 */
	public function setIdGrupo($id_grupo) {
		$this->id_grupo = $id_grupo;

		return $this;
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

		return $this;
	}

	/**
	 * Get the value of slug
	 */
	public function getSlug() {
		return $this->slug;
	}

	/**
	 * Set the value of slug
	 *
	 * @return  self
	 */
	public function setSlug($slug) {
		$this->slug = $slug;

		return $this;
	}

	/**
	 * Get the value of tipo
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * Set the value of tipo
	 *
	 * @return  self
	 */
	public function setTipo($tipo) {
		$this->tipo = $tipo;

		return $this;
	}
}