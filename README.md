Inserir
http://localhost:8000/produtos/novo

Listar
http://localhost:8000/produtos/ver/1

Alterar
http://localhost:8000/produtos/editar/1

Deletar
http://localhost:8000/produtos/excluir/1


BANCO DE DADOS E TABELA

CREATE DATABASE produtos;

CREATE TABLE crud_basico (
	id bigint(20) NOT NULL auto_increment,
	nome varchar(100) NOT NULL,
	custo decimal(19,2) NOT NULL,
	preco decimal(19,2) NOT NULL,
	quantidade int(10) NOT NULL,
	created_at timestamp,
	updated_at timestamp,
	PRIMARY KEY (id)
) ENGINE=InnoDB;

