USE banco_coude22;

CREATE TABLE clientes(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    documento VARCHAR(20),
    email VARCHAR(255) UNIQUE
);

CREATE TABLE pedidos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    id_cliente INT,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id)
);

CREATE TABLE pedidos_detalhe(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_produto INT,
    id_pedido INT,
    quantidade INT,
    FOREIGN KEY (id_produto) REFERENCES produtos(id),
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id)
);