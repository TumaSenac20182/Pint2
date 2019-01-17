<?php

  require 'testeConexao.php';

  function cadastra($nome, $email, $telefone, $cpf, $rua, $numero, $bairro, $cidade) {
    $link = connection();
    $query = "insert into tb_cadastroPessoal(nome, email, telefone, cpf, rua, numerocasa, bairro, cidade) values('{$nome}', '{$email}', '{$telefone}', '{$cpf}', '{$rua}', '{$numero}', '{$bairro}', '{$cidade}')";

    mysqli_query($link, $query);

    return true;

    if(!$link) {
      echo "Sem conexão com o banco";
    }
  }
