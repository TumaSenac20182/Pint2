<?php

  require_once 'db-connect.php';

  # grava no banco
  function registra($nome, $email, $matricula, $curso) {
    $link = getConnection();
    $query = "insert into tb_aluno(nome, email, matricula, curso) values ('{$nome}', '{$email}', $matricula, '{$curso}')";

    $result = pg_query($dbconn, $sql);

    if(!$result){
      echo pg_last_error($dbconn);
    } else {
      return $result;
    }
  }
