<?php

  require 'crud.php';

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['Nnome'];
    $email = $_POST['Nemail'];
    $telefone = $_POST['Ntel'];
    $cpf = $_POST['Ncpf'];
    $rua = $_POST['Nrua'];
    $numero = $_POST['NnumeroCasa'];
    $bairro = $_POST['Nbairro'];
    $cidade = $_POST['Ncidade'];

    if(cadastra($nome, $email, $telefone, $cpf, $rua, $numero, $bairro, $cidade)) {
      header('location: index.htm');      
      die;
    }


  }
