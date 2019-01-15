<?php


define("__SERVER__","jsk3f4rbvp8ayd7w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com");
define("__USER__","n398cf960pg77487");
define("__PASS__","gia0q309w2dl5v9r");
define("__DB__","ibzunnradjfds7kg");
define("__PORT__",3306);

function getConnection()
{
    $link= mysqli_connect(__SERVER__,__USER__,__PASS__,__DB__,__PORT__);

     mysqli_set_charset($link,"utf8");

    return $link;
}
 if(!getConnection())
 {
   echo "Erro ao conectar".mysqli_error().PHP_EOL;
 }
