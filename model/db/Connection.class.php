<?php

class Connection {
	private $connection;
	private $host = 'localhost';
	private $db = 'controle_financeiro';
	private $user = 'felipe';
	private $passwd = '123';

	public function __construct() {
		$this->getConnection();
	}

	public function closeAll() {
		$this->connection = NULL;
	}

	public function getConnection() {
		$this->connection = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connection->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

		return $this->connection;
	}

}