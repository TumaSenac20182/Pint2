<?php
require "conexao.php";

//create todas as tabelas.
 function createLogin($nome,$email,$telefone,$senha)
 {
    $link = getConnection();


    $query="insert into login(nome,email,telefone,senha) values('{$nome}', '{$email}', '{$telefone}', md5('{$senha}'))";
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

  function createEndereco($logradouro,$bairro,$numero,$cidade,$UFF,$referencias, $id_loja)
  {
     $link = getConnection();

     $query="insert into endereco(logradouro,bairro,numero,cidade,UFF,referencias,loja_id) values('{$logradouro}', '{$bairro}', '{$numero}', '{$cidade}', '{$UFF}', '{$referencias}',{$id_loja})";
     if(mysqli_query($link, $query))
     {
       return true;
     }

     mysqli_close($link);
     exit;
  }

  function createProduto($nome,$categoria,$preco,$descricao,$fabricante, $id_loja)
  {
     $link = getConnection();

     $query="insert into produtos(nome,categoria,preco,descricao,fabricante,loja_id) values('{$nome}', '{$categoria}', '{$preco}', '{$descricao}', '{$fabricante}',{$id_loja})";
     if(mysqli_query($link, $query))
     {
       return true;
     }

     mysqli_close($link);
     exit;
  }
  
  function createCategoria($categoria)
  {
     $link = getConnection();

     $query="insert into tb_categorias(categoria) values('{$nome}')";
     if(mysqli_query($link, $query))
     {
       return true;
     }

     mysqli_close($link);
     exit;
  }

  
  function createFabricante($fabricante)
  {
     $link = getConnection();

     $query="insert into tb_fabricantes(fabricante) values('{$nome}')";
     if(mysqli_query($link, $query))
     {
       return true;
     }

     mysqli_close($link);
     exit;
  }
  //-----------------------------------------------------------------------------------
 
 function findByLoja($Nome) 
 {

  $link = getConnection();

  $query = "select * from tb_vededores where id = {$id} or nome = '{$loja}' ";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}

function findByProdruto($Nome)
 {

  $link = getConnection();

  $query = "select * from tb_produto where id = {$id} or nome = '{$loja}' ";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}

function findByLoja($Nome) 
{

  $link = getConnection();

  $query = "select * from tb_lojas where id = {$id} or nome = '{$loja}' ";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}
function findByLogin($Email)
 {

  $link = getConnection();

  $query = "select * from tb_vendedores where email = '{$email}'";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}

function findByEndereço($endereco) 
{
  $link = getConnection();

  $query = "select * from tb_endereco where endereco = '{$endereco}'";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}


function findByCategoria($categoria) 
{
  $link = getConnection();

  $query = "select * from tb_categorias where categoria = '{$categoria}'";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}


function findByFabricante($fabricante) 
{
  $link = getConnection();

  $query = "select * from tb_fabricantes where fabricante = '{$fabricante}'";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}

  //--------------------------------------------------------------------------
  function updateLogin($senha) 
  {
    $link = getConnection();

    
    $query = "update tb_vendedores set senha = '{$senha}'";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  function updateProdutos($nome,$descricao,$preco) 
  {
    $link = getConnection();

    
    $query = "update tb_produtos set nome= '{$nome}', descricao='{$descricao}',preco='{$preco}'";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }
  
  function updateLoja($nome,$cnpj,$seguimento) 
  {
    $link = getConnection();

    
    $query = "update tb_loja set nome= '{$nome}', cnpj='{$cnpj}',seguimento='{$seguimento}'";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  function updateEndereco($logradouro,$bairro,$numero,$cidade,$uf,$referencia) 
  {
    $link = getConnection();

    $query = "update tb_endereco set nome= '{$logradouro}', bairro='{$bairro}',numero='{$cidade}',uf='{$uf}',referencia='{$referencia}'";
    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  
  function updateCategoria($categoria) 
  {
    $link = getConnection();

    $query = "update tb_categorias set categoria= '{$categoria}'";
    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  
  function updateFabricante($fabricante) 
  {
    $link = getConnection();

    $query = "update tb_fabricantes set fabricante= '{$fabricante}'";
    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }
  //------------------------------------------------------------------------------------
    
    function deleteLogin($id) {
      $link = getConnection();
  
      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_vendedores where id = '{$id}'";
  
      mysqli_query($link, $query);
  
      if(!$link) {
        mysqli_close($link);
      }
    }

    
    function deleteProdutos($id) {
      $link = getConnection();
  
      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_produtos where id = '{$id}'";
  
      mysqli_query($link, $query);
  
      if(!$link) {
        mysqli_close($link);
      }
    }

    
    function deleteLoja($id) {
      $link = getConnection();
  
      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_lojas where id = '{$id}'";
  
      mysqli_query($link, $query);
  
      if(!$link) {
        mysqli_close($link);
      }
    }

    
    function deleteEndereço($id) {
      $link = getConnection();
  
      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_endereço where id = '{$id}'";
  
      mysqli_query($link, $query);
  
      if(!$link) {
        mysqli_close($link);
      }
    }

    
    function deleteCategoria($id) {
      $link = getConnection();
  
      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_categorias where id = '{$id}'";
  
      mysqli_query($link, $query);
  
      if(!$link) {
        mysqli_close($link);
      }
    }

    
    function deleteFabricante($id) {
      $link = getConnection();
  
      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_fabricantes where id = '{$id}'";
  
      mysqli_query($link, $query);
  
      if(!$link) {
        mysqli_close($link);
      }
    }