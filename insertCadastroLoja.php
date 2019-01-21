<?php

  require 'crud.php';

  if($_POST)
  {
  $nome=$_POST['txtNomeLoja'];
  $cnpj=$_POST['txtCnpj'];
  $seguimento=$_POST['txtSeguimento'];

   createLoja($nome,$cnpj,$seguimento);
   //header('location:');
  }
