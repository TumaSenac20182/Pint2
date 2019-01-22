<?php

    include "./crud.php";

    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        if($produtos = produtoFindByName($_GET['txtNome'])){
            print_r($produtos);
        }
    }