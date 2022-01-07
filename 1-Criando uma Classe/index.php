<?php

//CRIANDO UMA CLASSE

class Pessoa
{

    public $nome;//Atributo

    public function falar(){//Método

        return "O meu nome é ".$this->nome;

        /**
         * Se quisermos fazer referencia ao $nome em qualquer um dos métodos iremos usar apenas o '$this->nome' sem usar o '$' o '$this->' faz o papel de '$'. atributo fora do metodo escreve normal '$nome', mas dentro do metodo '$this->nome'
         */

    }

}

$fernando = new Pessoa();//Objeto
$fernando->nome = "Fernando Franco";
echo $fernando->falar();

