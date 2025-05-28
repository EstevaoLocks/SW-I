<?php
    
    class Produto{

        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome_prod,$preco_prod=0,$qtde_prod=0){
            $this->Nome = $nome_prod;
            $this->Preco = $preco_prod;
            $this->Quantidade = $qtde_prod;
        }

        public function getNome(){
            return $this->Nome;
        }
        public function getPreco(){
            return $this->Preco;
        }
        public function setNome($nome){
            $this->Nome = $nome;
        }
        public function setPreco($valor){
            if ($valor < 0){
                echo "VALOR NÃO PERMITIDO";
            }else{
                $this->Preco = $preco;
            }
        }
        public function adicionarEstoque($qtd){
            if ($qtd < 0){
                echo "VALOR NÃO PERMITIDO";
            }else{
                $this->Quantidade += $qtd;
            }
        }
        public function removerEstoque($qtd){
            if ($qtd < 0 && $qtd <= $this->Quantidade){
                $this->Quantidade -= $qtd;
            }else{
                echo "VALOR NÃO PERMITIDO";
            }
        }
        public function MostrarDetalhes(){
            echo "NOME: {$this->getNome()} <br>";
            echo "PRECO: R${$this->getPreco()} <br>";
            echo "QUANTIDADE: {$this->Quantidade} <br>";
        }
    }

?>