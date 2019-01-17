<?php
require "conexao.php";

//create todas as tabelas.
 function createLogin($nome,$email,$telefone,$senha)
 {
    $link = getConnection();


    $query="insert into login(nome,email,telefone,senha) values('{$nome}', '{$email}', '{$telefone}','{$senha}')";
    if(mysqli_query($link, $query))
    {
      return true;
    }

    mysqli_close($link);
    exit;
 }

 function createLoja($nome,$cnpj,$seguimento)
 {
    $link = getConnection();


    $query="insert into loja(nome,cnpj,seguimento) values('{$nome}', '{$cnpj}', '{$seguimento}')";
    if(mysqli_query($link, $query))
    {
      return true;
    }

    mysqli_close($link);
    exit;
 }

  function createEndereco($logradouro,$bairro,$numero,$cidade,$UFF,$referencias)
  {
     $link = getConnection();

     $query="insert into endereco(logradouro,bairro,numero,cidade,UFF,referencias) values('{$logradouro}', '{$bairro}', '{$numero}', '{$cidade}', '{$UFF}', '{$referencias}')";
     if(mysqli_query($link, $query))
     {
       return true;
     }

     mysqli_close($link);
     exit;
  }

  function createProduto($nome,$categoria,$preco,$descricao,$fabricante)
  {
     $link = getConnection();

     $query="insert into produtos(nome,categoria,preco,descricao,fabricante) values('{$nome}', '{$categoria}', '{$preco}', '{$descricao}', '{$fabricante}')";
     if(mysqli_query($link, $query))
     {
       return true;
     }

     mysqli_close($link);
     exit;
  }
  //-----------------------------------------------------------------------------------
