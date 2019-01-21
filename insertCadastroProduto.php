<?php
require "crud.php";


if($_POST)
{
$nome=$_POST['txtNomeProduto'];
$categoria=$_POST['txtCategoria'];
$preco=$_POST['txtPreco'];
$descricao=$_POST['txtDescricao'];
$fabricante=$_POST['txtFabricante'];

 createProduto($nome,$categoria,$preco,$descricao,$fabricante, $id_loja);
 //header('location:');
}
