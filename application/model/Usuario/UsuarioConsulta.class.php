<?php

class UsuarioConsulta {
	private $db;

	public function __construct() {
		$this->db = parse_ini_file("config/database.ini");
	}

	public function insertUsuario($usuario) {
		try {
			$c = new Connection();
			$con = $c->getConnection();

			$loginExistente = UsuarioController::verificaLogin($usuario->getLogin());

			if (!$loginExistente) {
				$itens = array(
					'nome' => $usuario->getNome(),
					'login' => $usuario->getLogin(),
					'senha' => $usuario->getSenha(),
				);
				$query = "INSERT INTO {$this->db['database']}.usuario
							(nome, login, senha)
						VALUES
							(:nome, :login, :senha);";
				$con = $con->prepare($query);
				$con->execute($itens);
				header("location: /autenticacao/login");
			} else {
				header("location: /usuario/cadastrar&erro=2");
			}

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function verificaLogin($login) {
		try {
			$c = new Connection();
			$con = $c->getConnection();

			$query = "SELECT * FROM {$this->db['database']}.usuario where login = :login;";
			$stmt = $con->prepare($query);
			$stmt->bindValue(":login", $login);
			$stmt->execute();

			return $stmt->fetch(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			echo $e->getMessage();
		} finally {
			$c->closeAll();
		}
	}

	public function verificaLoginSenha($usuario) {
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
}