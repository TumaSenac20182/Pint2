<?php

  SESSION_start();

  include "testeConexao.php";

  if(empty($_POST['Nemail'] || $_POST['Nsenha'])) {
    echo "Preencha todos os campos!";
    die;
  }

  $usuario = mysqli_real_escape_string(connection(), $_POST['Nemail']);
  $senha = mysqli_real_escape_string(connection(), $_POST['Nsenha']);

  $query= "select id, nome from tb_login where email = '{$usuario}' and senha = '{$senha}'";

    $result = mysqli_query(connection(), $query);

    //echo $result;
    //exit;
  $row = mysqli_num_rows($result);

  if($row == 1) {
    $_SESSION['Nemail'] = $usuario;
    //header('location: painel.php');
    echo "Sucesso ao logar " . $usuario;
  } else {
    $_SESSION['nao_autenticado'] = true;
    //header('location: index.php');
    //exit();
    echo "Falha ao logar";
  }
