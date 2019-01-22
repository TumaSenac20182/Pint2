<?php


define("__SERVER__","localhost");
#define("__SERVER__","jsk3f4rbvp8ayd7w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com");
define("__USER__","root");
#define("__USER__","e8zp2c3y22dlz0ft");
define("__PASS__","");
#define("__PASS__","wbfougigo2m5s4hh");
define("__DB__","kk2b9oe1yvatj576");
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
