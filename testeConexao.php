<?php

  function connection() {
    $link = mysqli_connect("localhost", "root", "", "db_pint2", "3306");
    mysqli_set_charset($link, 'utf8');

    return $link;

    if(!connection()) {
      echo "error ao se conectar com o banco de dados" . mysqli_erro() . PHP_EOL;
    }
  }
