<?php
    namespace PHP\Modelo;
    
    class Residuos{
        protected int $id;
        protected string $peso;
        protected date $dt;
        protected string $classificacao;
        protected string $instituicao;
        protected string $atual;
        
        public function __construct(int $id,float $peso, date $dt,string $classificacao,string $instituicao,string $atual)

        {//instanciar
            $this->id = $id;
            $this->peso = $peso;  
            $this->dt = $dt; 
            $this->classificacao = $classificacao; 
            $this->instituicao = $instituicao;
            $this->atual = $atual;
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
                   "<br>ID: ".$this->id.
                   "<br>Data: ".$this->dt.
                   "<br>Classificação: ".$this->classificacao.
                   "<br>Instituição Destino: ".$this->instituicao.
                   "<br>Instituição Atual: ".$this->atual;
        }
    }//fim da classe pessoa
?>