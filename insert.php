<?php
require "crud.php";

if($_POST)
{
  $nome=$_POST['txtNome'];
  $contato=$_POST['txtTelefone'];
  $email=$_POST['txtEmail'];

  create($nome,$contato,$email);

  header('location:#');
  die();
}
