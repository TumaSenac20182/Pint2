<?php
//estamos usando um BD qualquer só para testar conexão enquanto não resolvemos o do site real.
function getConnection()
{
    $link= mysqli_connect("jsk3f4rbvp8ayd7w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","n398cf960pg77487","gia0q309w2dl5v9r","ibzunnradjfds7kg");

     mysqli_set_charset($link,"utf8");

    return $link;
}
 if(! getConnection())
 {
   echo "Erro ao conectar".mysqli_error().PHP_EOL;
 }
