use banco_coude22;

CREATE TABLE usuarios_aula(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR (100),
	email VARCHAR(100),
	senha VARCHAR(255),
	data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
	data_edicao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);