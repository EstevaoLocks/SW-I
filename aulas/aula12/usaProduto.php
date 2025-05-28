<?php
    include_once 'Produto.class.php';

    $n = $_POST['nome'];
    $p = $_POST['preco'];
    $q = $_POST['qtd'];


    $produto = new Produto("Mouse");

    $produto->adicionarEstoque($q);
    $produto->setPreco($p);
    $produto->MostrarDetalhes();


?>