<?php

class ProdutoModel {

	private $id_produto;
	private $id_grupo;
	private $id_usuario;
	private $descricao;
	private $valor;
	private $observacao;
	private $data_criacao;
	private $data_modificacao;

	/**
	 * Get the value of id_produto
	 */
	public function getIdProduto() {
		return $this->id_produto;
	}

	/**
	 * Set the value of id_produto
	 *
	 * @return  self
	 */
	public function setIdProduto($id_produto) {
		$this->id_produto = $id_produto;

		return $this;
	}

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
	 * Get the value of descricao
	 */
	public function getDescricao() {
		return $this->descricao;
	}

	/**
	 * Set the value of descricao
	 *
	 * @return  self
	 */
	public function setDescricao($descricao) {
		$this->descricao = $descricao;

		return $this;
	}

	/**
	 * Get the value of valor
	 */
	public function getValor() {
		return $this->valor;
	}

	/**
	 * Set the value of valor
	 *
	 * @return  self
	 */
	public function setValor($valor) {
		$this->valor = $valor;

		return $this;
	}

	/**
	 * Get the value of observacao
	 */
	public function getObservacao() {
		return $this->observacao;
	}

	/**
	 * Set the value of observacao
	 *
	 * @return  self
	 */
	public function setObservacao($observacao) {
		$this->observacao = $observacao;

		return $this;
	}

	/**
	 * Get the value of data_criacao
	 */
	public function getDataCriacao() {
		return $this->data_criacao;
	}

	/**
	 * Set the value of data_criacao
	 *
	 * @return  self
	 */
	public function setDataCriacao($data_criacao) {
		$this->data_criacao = $data_criacao;

		return $this;
	}

	/**
	 * Get the value of data_modificacao
	 */
	public function getDataModificacao() {
		return $this->data_modificacao;
	}

	/**
	 * Set the value of data_modificacao
	 *
	 * @return  self
	 */
	public function setDataModificacao($data_modificacao) {
		$this->data_modificacao = $data_modificacao;

		return $this;
	}

}