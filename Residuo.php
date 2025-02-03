<?php
    namespace PHP\Modelo;

    class Residuo{
        protected string $data;
        protected string $peso;
        protected string $categoria;
        protected string $nome;
        protected string $especializacao;

            public function __construct(string $data,string $peso,
                                        string $categoria,
                                        string $nome,string $especializacao)
            {
                $this->$data = $data;
                $this->peso = $peso;
                $this->categoria = $categoria;
                $this->nome = $nome;
                $this->especializacao = $especializacao;
            }

            public function __get(string $variavel):mixed{
                return $this->variavel;
            }//fim do get

            public function __set(string $variavel, string $novoDado):void{
                $this->variavel = $novoDado;
            }//fim do set

            public function imprimir():string{
               return "<br>Peso: ".$this->peso.
                      "<br>Categoria: ".$this->categoria.
                      "<br>Data: ".$this->data. 
                      "<br>Nome: ".$this->nome. 
                      "<br>Especialização: ".$this->especializacao;
        }
    }
?>