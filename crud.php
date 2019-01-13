<?php
require "conexao.php";

 function create($nome,$email,$contato)
 {
      $link=getConnection();

      $query="insert into tb_usuario(nome,email,contato) values({'$nome'},{'$email'},{'$contato'})";

      mysqli_query($link,$query) ;

    if(!$link)
    {
      mysqli_close($link);
    }

 }
