create database ProjetoIntegrador_M2;
 use ProjetoIntegrador_M2;

 create table tb_cadastro
 (
    id_cadastro int  unsigned primary key auto_increment,
    nome varchar(100) not null,
    email varchar(250) not null,
    contato varchar(100) not null    
 );

  create table tb_loja
 (
    id_loja int  unsigned primary key auto_increment,
    nome varchar(200) not null,
   #endereco chave estrangeira
    seguimento varchar(100) not null,
    cnpj varchar(100) not null
    #chave estrangera cadastro    
    #forma de pagemnto chave estrangeira
 );

   create table tb_formaPgamento
 (
    id_formaPgamento int  unsigned primary key auto_increment,
    dinehiro boolean not null,
    cartaoCred boolean not null,
    cartaoDeb boolean not null
 );
   create table tb_endereco
 (
    id_endereco int  unsigned primary key auto_increment,
    logradouro varchar(200) not null,
    bairro  varchar(100) not null,
    numero varchar(10)not null,
    bairro varchar(100) not null,
    cep varchar(100) not null,
    UF varchar(2) not null,
    referencia varchar(300) not null
 );

    create table tb_produto
 (
    id_produto int  unsigned primary key auto_increment,
    nome varchar(200) not null,
    categoria  varchar(100) not null,
    preco double not null,
    descricao varchar(400) not null,
    fabricante varchar(100) not null
 );