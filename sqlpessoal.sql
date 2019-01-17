create database db_pint2;

use db_pint2;

create table tb_cadastro(
  id int primary key auto_increment,
  nome varchar(150) not null,
  email varchar(100) not null,
  telefone varchar(20) not null,
  cpf varchar(11) not null,
  rua varchar(100) not null,
  numerocasa varchar(10) not null,
  bairro varchar(50) not null,
  cidade varchar(100) not null);

  create table tb_login(
    id int primary key auto_increment,
    email varchar(200) not null,
    senha varchar(20) not null,
    nome varchar(100) not null
  );

  insert into tb_login(email, senha, nome) values("teste@teste.com", "123", "Seu pai");
