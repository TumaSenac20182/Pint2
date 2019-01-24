<?php

require "crud.php";

if($_SERVER['REQUEST_METHOD'] ==='POST')
{
    if($Produtos = createProdutos(
                                $_POST['txtId'],
                                $_POST['txtCategorias'], 
                                $_POST['txtFabricante'],
                                $_POST['txtNome'],
                                $_POST['txtPreco'], 
                                $_POST['txtDescricao']
                            )
    )
    {
       header("locatin:CadastroProd.php");
    }
        else
    {
        echo "Erro ao cadastrar";
    }
    
}

