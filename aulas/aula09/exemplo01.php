<?php
    include_once 'Pessoa.class.php';

    // CRIAR UM OBJETO - INSTANCIA DA CLASSSE PESSOA
    $fulano = new Pessoa();
    $ciclano = new Pessoa();

    //var_dump($fulano);

    // ATRIBUIR VALORES
    $fulano->Nome = "FULANO DA SILVA";
    $fulano->Peso = 90;
    $fulano->Altura = 1.82;

    $ciclano->Nome = "CICLANO DA SILVA";
    $ciclano->Peso = 70;
    $ciclano->Altura = 1.50;

    // CHAMANDO UM MÉTODO DA CLASSE PESSOA
    $fulano->MostraDados();
    $ciclano->MostraDados();
    $fulano->ApresentarDados();
    $ciclano->ApresentarDados();
?>