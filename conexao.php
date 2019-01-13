<?php
//estamos usando um BD qualquer só para testar conexão enquanto não resolvemos o do site real.
function getConnection()
{
    $link= mysqli_connect("localhost","root","","usuarios");

     mysqli_set_charset($link,"utf8");

    return $link;
}
 if(! getConnection())
 {
   echo "Erro ao conectar".mysqli_error().PHP_EOL;
 }
