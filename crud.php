<?php
  require_once 'conexao.php';

  # grava no banco
  function registra($nome, $email, $matricula, $curso) {
    $link = getConnection();
    $query = "insert into tb_aluno(nome, email, matricula, curso) values ('{$nome}', '{$email}', $matricula, '{$curso}')";

    return mysqli_query($link, $query);
  }

  ## consultas

  # consulta todos
  function lista() {
    $link = getConnection();
    $query = "select * from tb_aluno";

    $registros = mysqli_query($link, $query);
    $lista = array();

    while($linha = mysqli_fetch_assoc($registros)) {
      array_push($lista, $linha);
    }
    return $lista;
  }

  # consulta por matrícula
  function localiza($matricula) {
    $link = getConnection();
    $query = "select * from tb_aluno where matricula = {$matricula}";

    $registro = mysqli_query($link, $query);

    return mysqli_fetch_assoc($registro);
  }

  # atualiza
  function atualiza($id, $nome, $email, $matricula, $curso) {
    $link = getConnection();
    $query = "update tb_aluno set nome = {$nome}, email = {$email}, matricula = {$matricula}, curso = {$curso} where id = {$id}";

    return mysqli_query($link, $query);
  }

  # apaga
  function apaga($id) {
    $link = getConnection();
    $query = "delete from tb_aluno where id = {$id}";

    return mysqli_query($link, $query);
  }
