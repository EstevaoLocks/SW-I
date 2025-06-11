<?php

    class Retangulo{

        private $largura;
        private $altura;

        public function __construct($largura, $altura){
            $this->largura = $largura;
            $this->altura = $altura;
        }

        public function getLargura(){
            echo "largura: " . $this->largura;
            echo "<br>";
        }
        public function getAltura(){
            echo "altura: " . $this->altura;
            echo "<br>";
        }
        public function setLargura($newLargura){
            $this->largura = $newLargura;
            echo "Largura alterada";
            echo "<br>";
        }
        public function setAltura($newAltura){
            $this->altura = $newAltura;
            echo "Altura alterada";
            echo "<br>";
        }

        public function calcularArea(){
            $area = $this->largura * $this->altura;
            echo "área do retângulo: " . $area;
            echo "<br>";
        }
        public function calcularPerimetro(){
            $perimetro = $this->largura * 2 + $this->altura * 2;
            echo "perímetro do retângulo: " . $perimetro;
            echo "<br>";
        }
    }



?>