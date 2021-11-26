CREATE DATABASE elaneon;

CREATE TABLE produto (
        id_produto INT(10) AUTO_INCREMENT PRIMARY KEY, 
        titulo VARCHAR(40) NOT NULL, 
        descritivo VARCHAR(255), 
        valor DECIMAL(5,2) NOT NULL, 
        destaque VARCHAR(40), 
        quantidade INT(5) NOT NULL,
        id_categoria INT(4) NOT NULL
) ENGINE = innodb;

CREATE TABLE categoria(
		id_categoria INT(4) AUTO_INCREMENT PRIMARY KEY,
    	nome VARCHAR(255) NOT NULL
) ENGINE = innodb;

CREATE TABLE cliente (
    	id_cliente INT(10) AUTO_INCREMENT PRIMARY KEY, 
    	nome VARCHAR(255) NOT NULL, 
    	email VARCHAR(255) NOT NULL,
    	telefone VARCHAR(255),
   		senha VARCHAR(255) NOT NULL, 
    	cpf VARCHAR(14) NOT NULL
) ENGINE = innodb;

CREATE TABLE endereco (
	id_endereco INT(10) AUTO_INCREMENT PRIMARY KEY, 
	logradouro VARCHAR(255) NOT NULL, 
    complemento VARCHAR(255)
) ENGINE = innodb;

CREATE TABLE cesta (
    	id_session INT(10) PRIMARY KEY, 
    	quantidade INT(5) NOT NULL, 
    	valorUnitario DECIMAL(5,2) NOT NULL, 
    	valorTotal DECIMAL(5,2) NOT NULL,
        id_cliente INT(10) NOT NULL,
        id_produto INT(10) NOT NULL
) ENGINE = innodb;

ALTER TABLE produto
ADD FOREIGN KEY `fk_categoria`(`id_categoria`)
REFERENCES `categoria` ( `id_categoria`);

ALTER TABLE cesta
ADD FOREIGN KEY `fk_cliente` (`id_cliente`) 
REFERENCES `cliente` (`id_cliente`);

ALTER TABLE cesta
ADD FOREIGN KEY `fk_produto` (`id_produto`) 
REFERENCES `produto`(`id_produto`);



ALTER TABLE `endereco` ADD `cep` VARCHAR(10) NOT NULL AFTER `complemento`;

ALTER TABLE `endereco` ADD `cidade` VARCHAR(10) NOT NULL AFTER `complemento`;


SET GLOBAL FOREIGN_KEY_CHECKS=0;

/*
CREATE TABLE estado (
        id_estado INT(10) AUTO_INCREMENT PRIMARY KEY, 
        sigla VARCHAR(3) NOT NULL
) ENGINE = innodb;

ALTER TABLE `endereco` ADD `id_estado` INT(10) NOT NULL AFTER `complemento`;

ALTER TABLE endereco
ADD FOREIGN KEY `fk_estado`(`id_estado`)
REFERENCES `estado` ( `id_estado`);

INSERT INTO estado (id_estado, sigla)
VALUES 
(1, "AC"),
(2, "AL"),
(3, "AP"),
(4, "AM"),
(5, "BA"),
(6, "CE"),
(7, "DF"),
(8, "ES"),
(9, "GO"),
(10, "MA"),
(11, "MT"),
(12, "MS"),
(13, "MG"),
(14, "PA"),
(15, "PB"),
(16, "PR"),
(17, "PE"),
(18, "PI"),
(19, "RJ"),
(20, "RN"),
(21, "RS"),
(22, "RO"),
(23, "RR"),
(24, "SC"),
(25, "SP"),
(26, "SE"),
(27, "TO");
*/
