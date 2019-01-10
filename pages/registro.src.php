<?php

if ($_POST) {
	try {
		include ROOT_PATH . "/model/Connection.class.php";
		$c = new Connection();
		$con = $c->getConnection();

		var_dump($_POST);
		$data = !empty($_POST['data']) ? $_POST['data'] : date('Y-m-d');

		$con->query("INSERT INTO controle_financeiro.produto (nome, valor, grupo, tipo, data_criacao) VALUES ('teste', 50, 'aml', 0, '$data');");
	} catch (Exception $e) {
		echo $e->getMessage();
	} finally {
		$c->closeAll();
	}
	include "registro.html.php";

} else {
	include "registro.html.php";
}
