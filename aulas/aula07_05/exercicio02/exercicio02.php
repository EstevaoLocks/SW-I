<?php
    include_once 'Carro.class.php';

    $carro1 = new Carro();

    $carro1->Marca = "";
    $carro1->Modelo = "";
    $carro1->Combustivel = 0;
    $carro1->Portas = 0;
    $carro1->Capacidade_Tanque = 0;

    $carro1->MostrarDados();
?>