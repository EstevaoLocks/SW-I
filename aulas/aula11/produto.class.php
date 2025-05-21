<?php
    
    class produto{

        private $Nome;
        private $Preco;
        private $Quantidade;

        //Construtor para iniciar Nome, Preço e Quantidade
        public function __construct($nome, $preco, $quantidade = 0){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade = $quantidade;
        }

        public function getNome(){
            return $this->Nome;
        }
        public function setNome($nome){
            $this->Nome = $nome;
        }
        public function getPreco(){
            return $this->Preco;
        }
        public function setPreco($preco){
            $this->Preco = $preco;
        }

        public function addEstoque($qntAdd){
            $this->Quantidade += $qntAdd;
        }
        public function removerEstoque($qntRemover){
            $this->Quantidade -= $qntRemover;
        }
        public function mostrarDetalhes(){
            echo "Nome do Produto: {$this->Nome}";
            echo "Preço do Produto: {$this->Preco}";
            echo "Quantidade em Estoque: {$this->Quantidade}";
        }

    }


    
    ?>