create database sga;

  use sga;

  create table tb_aluno(
    id SERIAL PRIMARY KEY,
    nome TEXT NOT NULL,
    email TEXT NOT NULL,
    matricula INT NOT NULL,
    curso TEXT NOT NULL
);
