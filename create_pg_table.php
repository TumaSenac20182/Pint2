<?php

require_once 'db-connect.php';

$sql = "create table tb_aluno(
          id SERIAL PRIMARY KEY,
          nome TEXT NOT NULL,
          email TEXT NOT NULL,
          matricula INT NOT NULL,
          curso TEXT NOT NULL
        )";

$result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Tabela criada com sucesso!";
}

// Fecha a conexão
pg_close($dbconn);
