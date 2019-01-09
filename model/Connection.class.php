<?php

class Connection {
	private $connection;

	public function __construct() {
		$this->getConnection();
	}

	public function closeAll() {
		$this->connection = array();
	}

	public function getConnection() {
		if (!isset($this->connection)) {
			$this->connection = new PDO('mysql:host=localhost;dbname=controle-financeiro', 'felipe', '123', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->connection->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
		}

		return $this->connection;
	}

}