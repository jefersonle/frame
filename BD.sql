CREATE TABLE produto(
	id_produto SERIAL,
	nome VARCHAR(255),
	modelo VARCHAR(255),
	peso DECIMAL,
	preco DECIMAL,
	descricao VARCHAR(255),
	PRIMARY KEY (id_produto)
);