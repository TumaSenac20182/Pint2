<?php

# constantes
  define("SERVER", array(
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "dbname" => "sga",
    "port" => "3306"
  ));

  function getConnection() {
    $link = mysqli_connect(SERVER['host'], SERVER['user'], SERVER['pass'], SERVER['dbname'], SERVER['port']);
    mysqli_set_charset($link, 'utf8');
    return $link;
  }

  if(!getConnection()) {// EOL - End Of Line (Final da linha)
    echo 'Falha ao abrir a conexão, erro sob o número: ' . mysqli_errno() . PHP_EOL;
    echo 'A mensagem do erro: ' . mysqli_error() . PHP_EOL;
    exit;
}
