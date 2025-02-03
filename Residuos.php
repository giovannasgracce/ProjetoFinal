<?php
    namespace PHP\Modelo;
    
    class Residuos{
        protected string $cpf;
        protected string $peso;
        protected string $dt;
        protected string $classificacao;
        protected string $instituicao;
        
        public function __construct(string $cpf,float $peso, string $dt,string $classificacao,string $instituicao)

        {//instanciar
            $this->cpf = $cpf;
            $this->peso = $peso;  
            $this->dt = $dt; 
            $this->classificacao = $classificacao; 
            $this->instituicao = $instituicao;
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
            return 
                   "<br><br>Peso: ".$this->peso.
                   "<br>cpf: ".$this->cpf.
                   "<br>Data: ".$this->dt.
                   "<br>Classificação: ".$this->classificacao.
                   "<br>Instituição: ".$this->instituicao;
        }
    }//fim da classe pessoa
?>