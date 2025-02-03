<?php
    namespace PHP\Modelo;

    class Funcionario{
        protected string $cpf;
        protected float $tipo;
        protected string $nome;
        protected string $telefone;
        protected string $instituicao;
        protected string $Cargo;

        
        public function __construct(string $cpf,float $tipo,string $nome,string $telefone,string $instituicao,string $cargo)

         {//instanciar
            $this->cpf = $cpf; 
            $this->tipo = $tipo;
            $this->nome = $nome; 
            $this->telefone = $telefone; 
            $this->instituição = $instituicao; 
            $this->cargo = $cargo;
        }//fim do construct

        public function __get(string $variavel):mixed
        {
            return $this-> variavel;
        }    

        public function __set(string $variavel,string $novoDado):void//nao retorna nada 
        {
            $this->variavel = $novoDado;
        }

        public function imprimir():string
        {
            return "<br><br>CPF: ".$this->cpf.
                   "<br>Tipo: ".$this->tipo.
                   "<br>Nome: ".$this->nome.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Instituição: ".$this->instituicao.
                   "<br>Cargo: ".$this->cargo;
        }
    }//fim da classe pessoa
?>