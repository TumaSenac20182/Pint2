<?php

require "crud.php";

if($_POST)
{
$logradouro=$_POST['txtLogradouro'];
$bairro=$_POST['txtBairro'];
$numero=$_POST['txtNumero'];
$cidade=$_POST['txtCidade'];
$UFF=$_POST['txtUff'];
$referencias=$_POST['txtReferenmcias'];

 createEndereco($logradouro,$bairro,$numero,$cidade,$UFF,$referencias);
 //header('location:');
}
