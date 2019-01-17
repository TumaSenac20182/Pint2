<?php

  SESSION_start();

  include "conexao.php";

  if(empty($_POST['Nemail'] || $_POST['Nsenha'])) {
    echo "Preencha todos os campos!";
    die;
  }
  $link = getConnection();
  $usuario = mysqli_real_escape_string($link, $_POST['Nemail']);
  $senha = mysqli_real_escape_string($link, $_POST['Nsenha']);

  $query= "select id, email, nome from tb_vendedores where email = '{$usuario}' and senha = '{$senha}'";

  $result = mysqli_query($link, $query);

  if($row = mysqli_fetch_assoc($result)) {
    $_SESSION['Nemail'] = $usuario;
    //header('location: painel.php');
    echo "Sucesso ao logar " . $usuario;
  } else {
    $_SESSION['nao_autenticado'] = true;
    //header('location: index.php');
    //exit();
    echo "Falha ao logar";
  }
