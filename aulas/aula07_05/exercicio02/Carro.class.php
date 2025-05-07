<?php
    class Carro{

        public $Marca;
        public $Modelo;
        public $Combustivel;
        public $Portas;
        public $Capacidade_tanque;

        public function MostrarDados(){
            echo "Marca: " . $this->Marca . "<br>";
            echo "Modelo: " . $this->Modelo . "<br>";
            echo "Combustível: " . $this->Combustivel . "<br>";
            echo "Portas: " . $this->Portas . "<br>";
            echo "Capacidade_tanque: " . $this->Capacidade_tanque . "<br>";
            echo "<hr>";
        }
        

    }


?>