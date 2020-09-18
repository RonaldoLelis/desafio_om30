Desafio_OM30

Teste feito no Framework Codeigniter 4

Banco de dados utilizado foi o postgresql,
para rodar o projeto crie um BD
e rode o SQL:

CREATE DATABASE IF NOT EXISTS medi_om;

USE medi_om;

CREATE TABLE tab_pacientes(
	id integer auto_increment primary key,
	nome varchar(100),
	cpf varchar(20),
	cartao_cns(20),
	email varchar(50),
	telefone varchar(20),
	celular varchar(20),
	data_nascimento date,
	nome_mae varchar(100),
  cep varchar(10),
	endereco varchar(100),
	numero int(4),
	bairro varchar(100),
	cidade varchar (50),
	estado varchar(2),
	status varchar(10),
  foto varchar(200),
	data_cadastro timestamp default CURRENT_TIMESTAMP,
	data_alteracao timestamp
);


***algumas funções não finalizadas, como por exemplo:
-->validação do Login
-->página Editar

