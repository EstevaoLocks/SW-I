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
            echo "<tr>";
        }
        public function getAltura(){
            echo "altura: " . $this->altura;
            echo "<tr>";
        }
        public function setLargura($newLargura){
            $this->largura = $newLargura;
        }
        public function setAltura($newAltura){
            $this->altura = $newAltura;
        }

        public function calcularArea(){
            $area = $this->largura * $this->altura;
            echo "área do retângulo: " . $area;
            echo "<tr>";
        }
        public function calcularPerimetro(){
            $perimetro = $this->largura * 2 + $this->altura * 2;
            echo "perímetro do retângulo: " . $perimetro;
            echo "<tr>";
        }
    }



?>