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
    	cpf VARCHAR(14) NOT NULL, 
        id_endereco INT(10) NOT NULL
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

ALTER TABLE cliente
ADD FOREIGN KEY  `fk_endereco` (`id_endereco`)
REFERENCES `endereco` (`id_endereco`);

ALTER TABLE cesta
ADD FOREIGN KEY `fk_cliente` (`id_cliente`) 
REFERENCES `cliente` (`id_cliente`);

ALTER TABLE cesta
ADD FOREIGN KEY `fk_produto` (`id_produto`) 
REFERENCES `produto`(`id_produto`);