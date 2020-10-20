DROP DATABASE IF EXISTS controle_financeiro;
CREATE DATABASE controle_financeiro;
USE controle_financeiro;

CREATE TABLE usuario(
	id_usuario int(11) NOT NULL AUTO_INCREMENT,
	nome varchar(255),
	login varchar(255) NOT NULL,
	senha varchar(255) NOT NULL,
	PRIMARY KEY (id_usuario)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE grupo (
	id int(11) NOT NULL AUTO_INCREMENT,
	nome varchar(100) NOT NULL,
	slug varchar(100) NOT NULL,
	tipo TINYINT NOT NULL,
	PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE produto (
	id int(11) NOT NULL AUTO_INCREMENT,
	id_grupo int(11),
	id_usuario int(11),
	descricao varchar(255) NOT NULL,
	valor double(8,2) NOT NULL,
	observacao text,
	data_criacao timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	data_modificacao timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	FOREIGN KEY (id_grupo) REFERENCES grupo (id_grupo),
	FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;