<?php
    class Pessoa{
        // ATRIBUTOS
        public $Nome; 
        public $Peso; 
        public $Altura;
            
        // MÉTODO DA CLASSE PESSOA (UMA AÇÃO QUE A CLASSE PODE EXECUTAR) 
        public function MostraDados() {
            echo "O nome é: " . $this->Nome . "<br>"; 
            echo "o Peso é:" . $this->Peso . "<br>"; 
            echo "a Altura é: " . $this->Altura . "<br>";
            echo "<hr>";
        } 

        public function ApresentarDados() {
            echo "Olá, meu nome é " . $this->Nome . ", peso " . $this->Peso . " Kg e minha altura é " . $this->Altura . " metros\n";
            echo "<hr>";
        }
    }
?>