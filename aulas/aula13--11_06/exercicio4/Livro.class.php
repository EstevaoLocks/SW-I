<?php

    class Livro{

        private $titulo;
        private $autor;
        private $disponivel;

        public function __construct($titulo, $autor, $disponivel = true){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->dispoivel = $disponivel;
        }

        public function emprestar(){
            $this->disponivel = false;
        }

        public function devolver(){
            $this->disponivel = true;
        }

        public function exibirStatus(){
            echo "Título: " . $this->titulo;
            echo "Título: " . $this->autor;
            if ($this->disponivel == true){
                echo "Esse livro está: disponível";
            }else{
                echo "Esse livro está: emprestado";
            }
        }
    }



?>