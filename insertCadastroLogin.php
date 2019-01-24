<?php


require "crud.php";

if($_POST)
{
  $nome=$_POST['txtNome'];
  $telefone=$_POST['txtTelefone'];
  $email=$_POST['txtEmail'];
  $senha=$_POST['txtSenha'];

  createLogin($nome,$email,$telefone,$senha);

  header('location:index.php');
}
