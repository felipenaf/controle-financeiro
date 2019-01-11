<?php

class ProdutoModel {

	private $id;
	private $descricao;
	private $valor;
	private $grupo;
	private $tipo;
	private $observacao;
	private $dataCriacao;
	private $dataModificacao;

	/**
	 * Get the value of id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
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
	 * Get the value of grupo
	 */
	public function getGrupo() {
		return $this->grupo;
	}

	/**
	 * Set the value of grupo
	 *
	 * @return  self
	 */
	public function setGrupo($grupo) {
		$this->grupo = $grupo;

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
	 * Get the value of dataCriacao
	 */
	public function getDataCriacao() {
		return $this->dataCriacao;
	}

	/**
	 * Set the value of dataCriacao
	 *
	 * @return  self
	 */
	public function setDataCriacao($dataCriacao) {
		$this->dataCriacao = $dataCriacao;

		return $this;
	}

	/**
	 * Get the value of dataModificacao
	 */
	public function getDataModificacao() {
		return $this->dataModificacao;
	}

	/**
	 * Set the value of dataModificacao
	 *
	 * @return  self
	 */
	public function setDataModificacao($dataModificacao) {
		$this->dataModificacao = $dataModificacao;

		return $this;
	}
}