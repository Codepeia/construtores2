<?php
    class Empregado{
        private $nome;
        private $salario;

        //metodos construtor
        public function __construct($nome, $salario){
            $this->nome = $nome;
            $this->setSalario($salario);
        }

        //metodo acessor
        public function getNome(){
            return $this->nome;
        }
        //metodo modificador
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getSalario(){
            return $this->salario;
        }
        //filtro: salario > 1412
        public function setSalario($salario){
            if($salario < 1412.00){
                echo "salario invalido";
            }else{
                $this->salario = $salario;
            }
        }
        public function toString(){
            return "Nome: {$this->getNome()} 
                    
            \n Salario: {$this->getSalario()}";
        }
    }

    

?>