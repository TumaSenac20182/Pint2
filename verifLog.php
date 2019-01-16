<?php

  SESSION_start();

  include "conexao.php";

  if(empty($_POST['Nusuario'] || $_POST['Nsenha'])) {
    echo "Preencha todos os campos!";
    die;
  }

  $usuario = mysqli_real_escape_string(getconnect(), $_POST['Nusuario']);
  $senha = mysqli_real_escape_string(getconnect(), $_POST['Nsenha']);

  $query= "select id_usuario, nome from tb_usuarios where nome = '{$usuario}' and senha = '{$senha}'";

  $result = mysqli_query(getconnect(), $query);

  $row = mysqli_num_rows($result);

  if($row == 1) {
    $_SESSION['Nusuario'] = $usuario;
    //header('location: painel.php');
    //exit();
    echo "Sucesso ao logar";
  } else {
    $_SESSION['nao_autenticado'] = true;
    //header('location: index.php');
    //exit();
    echo "Falha ao logar";
  }
