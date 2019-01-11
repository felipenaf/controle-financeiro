DROP DATABASE IF EXISTS controle_financeiro;
CREATE DATABASE controle_financeiro;
USE controle_financeiro;

CREATE TABLE controle_financeiro.produto (
	id_produto int(11) NOT NULL AUTO_INCREMENT,
	descricao varchar(255) NOT NULL,
	valor double(8,2) NOT NULL,
	grupo varchar(255),
	tipo TINYINT,
	observacao text,
	data_criacao timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	data_modificacao timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id_produto)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE controle_financeiro.grupo (
	id_grupo int(11) NOT NULL AUTO_INCREMENT,
	nome varchar(255),
	PRIMARY KEY (id_grupo)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
