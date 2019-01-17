<?php
require "crud.php";

if($_POST)
{
  $nome=$_POST['txtNome'];
  $telefone=$_POST['txtTelefone'];
  $email=$_POST['txtEmail'];
  $senha=$_POST['txtSenha'];

  createLogin($nome, $telefone, $email,$senha);

  //header('location:');
}

if($_POST)
{
$nome=$_POST['txtNomeLoja'];
$cnpj=$_POST['txtCnpj'];
$seguimento=$_POST['txtSeguimento'];

 createLoja($nome,$cnpj,$seguimento);
 //header('location:');
}

if($_POST)
{
$logradouro=$_POST['txtLogradouro'];
$bairro=$_POST['txtBairro'];
$numero=$_POST['txtNumero'];
$cidade=$_POST['txtCidade'];
$UFF=$_POST['txtUff'];
$referencias=$_POST['txtReferenmcias'];

 createEndereco($logradouro,$bairro,$numero,$cidade,$UFF,$referencias);
 //header('location:');
}

if($_POST)
{
$nome=$_POST['txtNomeProduto'];
$categoria=$_POST['txtCategoria'];
$preco=$_POST['txtPreco'];
$descricao=$_POST['txtDescricao'];
$fabricante=$_POST['txtFabricante'];

 createEndereco($nome,$categoria,$preco,$descricao,$fabricante);
 //header('location:');
}
