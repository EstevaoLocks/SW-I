<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if ($valor > $this->Saldo){
                $resultado = "Saldo Insuficiente";
                return $resultado;

            }else{
                $this->Saldo -= $valor;
                $resultado = "Saldo autalizado para R$ ". $this->Saldo;
                return $resultado;
                
            }
        }
        public function Depositar($valor){
            $this->Saldo += $valor;
            $resultado = "Saldo autalizado para R$ ". $this->Saldo;
            return $resultado;
        }
        public function ConsultarSaldo(){
            echo "NOME: " . $this->Nome . "<br>";
            echo "CPF: " . $this->Cpf . "<br>";
            echo "Saldo Atual R$: " . $this->Saldo . "<br>";
        }
    }

?>