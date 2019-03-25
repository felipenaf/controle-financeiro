<?php

class UsuarioConsulta {
	private $db;

	public function __construct() {
		$this->db = parse_ini_file("config/database.ini");
	}

	public function verificaLogin($usuario) {
		try {
			$c = new Connection();
			$con = $c->getConnection();

			$itens = array(
				'login' => $usuario->getLogin(),
				'senha' => $usuario->getSenha(),
			);

			$query = "SELECT * FROM {$this->db['database']}.usuario where login = :login and senha = :senha;";

			$stmt = $con->prepare($query);
			$stmt->execute($itens);

			return $stmt->fetch(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function insertUsuario($usuario) {
		try {
			$c = new Connection();
			$con = $c->getConnection();
			$itens = array(
				'login' => $usuario->getLogin(),
				'senha' => $usuario->getSenha(),
				'nome' => $usuario->getNome(),
			);
			$query = "INSERT INTO {$this->db['database']}.usuario
						(login, senha, nome)
					VALUES
						(:login, :senha, :nome);";
			$con = $con->prepare($query);
			$con->execute($itens);
			include "pages/login.src.php";

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

}