DROP SCHEMA IF EXISTS banco_coude22;
CREATE SCHEMA IF NOT EXISTS banco_coude22;
USE banco_coude22;

CREATE TABLE usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    data_nascimento DATE,
    email VARCHAR(255) UNIQUE,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE produtos(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100),
    preco DECIMAL(10,2),
    marca varchar(50)
);

