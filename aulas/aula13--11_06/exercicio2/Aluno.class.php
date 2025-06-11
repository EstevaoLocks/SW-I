<?php

    class Aluno{

        private $nome;
        private $nota1;
        private $nota2;

        public function __construct($nome, $nota1, $nota2){
            $this->nome = $nome;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
        }

        public function verInfoAluno(){
            echo "Nome do aluno: " . $this->nome;
            echo "Média: " . ($this->nota1 + $this->nota2)/2;
            echo "<br>";
        }
        public function verificarSituacao(){
            if (($this->nota1 + $this->nota2)/2 >= 7){
                echo "Situação: Aprovado";
            }else{
                echo "Situação: Reprovado";
            }
            
            echo "<br>";
        }
    }



?>