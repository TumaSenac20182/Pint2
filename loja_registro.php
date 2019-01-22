<?php 

require "crud.php";


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(createLoja
    (
         $_POST['txtId_vendedor'],
         $_POST['txtNome'],
         $_POST['txtCnpj'],
         $_POST['txtSeguimento'],
         $_POST['txtLogradouro'],
         $_POST['txtBairro'],
         $_POST['txtCidade'],
         $_POST['txtUf'],
         $_POST['txtReferencia']
    )
    )
    {
       echo "Cadastrado com Sucesso ";
   
    }

}

