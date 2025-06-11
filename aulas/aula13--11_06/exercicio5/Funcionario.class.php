<?php

    class Funcionario{

        private $nome;
        private $salario;

        public function __construct($nome, $salario=1500){
            $this->nome = $nome;
            $this->salario = $salario;
        }

        public function aumentarSalario($percentualDeAumento){
            $this->salario = ($percentualDeAumento / 100 + 1) * $this->salario;
        }

        public function exibirInformacoes(){
            echo "Nome do Funcionário: " . $this->nome;
            echo "Salário: " . $this->salario;
        }
    }



?>