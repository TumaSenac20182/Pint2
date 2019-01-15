create database sga;

  use sga;

  create table tb_aluno(
    id int primary key auto_increment,
    nome varchar(150) not null,
    email varchar(150) not null,
    matricula int not null,
    curso varchar(50) not null
  );
