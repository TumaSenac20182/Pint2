<?php
require "conexao.php";

 function create($nome,$email,$contato)
 {
    $link = getConnection();

    $query="insert into tb_cadastro(nome,email,contato) values('{$nome}', '{$email}', '{$contato}')";

    if(mysqli_query($link, $query))
    {
      return true;
    }

    mysqli_close($link);
    exit;
 }
