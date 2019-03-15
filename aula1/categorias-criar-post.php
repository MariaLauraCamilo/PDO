<?php
require_once 'global.php';

try {
    $nome = $_POST['nome'];
    $categoria = new Categoria();
} catch (Exception $e){
    Erro::trataErro($e);
}


header('location: categorias.php');