<?php
    include_once 'Produto.class.php';

    $produto1 = new Produto("caneta", 9.90, 20);

    $produto1->mostrarDetalhes();
    $produto1->setNome("borracha");
    echo "Novo nome: {$produto1->getNome()}";
    $produto1->setPreco(5.50);
    echo "Novo preço: R${$produto1->getPreco()}";


?>