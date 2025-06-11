<?php

    include_once 'Retangulo.class.php';

    $retangulo1 = new Retangulo(2,4);

    $retangulo1->getLargura();
    $retangulo1->getAltura();
    $retangulo1->setLargura(4);
    $retangulo1->setAltura(8);
    $retangulo1->calcularArea();
    $retangulo1->calcularPerimetro();



?>