<?php
    namespace PHP\Modelo;

    class Funcionario{
        protected int $id;
        protected string $tipo;
        protected string $nome;
        protected string $telefone;
        protected string $instituicao;
        protected string $Cargo;
        protected string $Senha;

        
        public function __construct(int $id,float $tipo,string $nome,string $telefone,string $instituicao,string $cargo,string $Senha)

         {//instanciar
            $this->id = $id; 
            $this->tipo = $tipo;
            $this->nome = $nome; 
            $this->telefone = $telefone; 
            $this->instituição = $instituicao; 
            $this->cargo = $cargo;
            $this->Senha = $Senha;
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
            return "<br><br>ID: ".$this->cpf.
                   "<br>Tipo: ".$this->tipo.
                   "<br>Nome: ".$this->nome.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Instituição: ".$this->instituicao.
                   "<br>Cargo: ".$this->cargo.
                   "<br>Senha: ".$this->senha;
        }
    }//fim da classe pessoa
?>