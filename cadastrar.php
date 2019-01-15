<?php
  include 'crud_pg.php';
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    /*
      filter_input - Obtém uma variável externa específica por nome e, opcionalmente, a "filtra".
      SANITIZE - trata os campos, removendo caracteres não especificos para o tipo
    */
    # http://php.net/manual/en/filter.filters.sanitize.php
    $nome = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL);
    $matricula = filter_input(INPUT_POST, 'txtMatricula', FILTER_SANITIZE_NUMBER_INT);
    $curso = filter_input(INPUT_POST, 'txtCurso', FILTER_SANITIZE_STRING);
    if(registra($nome, $email, $matricula, $curso)) {
        echo "<p>Dados gravados com sucesso</p>";
        header('refresh: 10; url=index.php?page=lista');
        exit;
    } else {
      echo "<p>Erro ao gravar</p>";
      header('refresh: 30; url=index.php?page=form_cadastro');
      exit;
    }
  }
