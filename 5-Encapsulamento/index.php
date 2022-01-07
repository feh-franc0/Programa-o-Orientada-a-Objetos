<?php

//!Encapsulamento
//?Protege e controla quem pode ver o que.Dentro disos existe um outro nome ou sinonimo que é Modificador de acesso,um atributo ou um metodo voce pode modificar quem pode acessar-los e em quais circunstancias

//*Encapsulamento quando bem ultilizados ele pode ajuda não somente em proteger as informações mas de uma certa forma organizar quem vai acessar e a forma que isso deve ocorrer.
//*Outro assunto que a gente vai falar mais adiante torna isso ainda mais interessante que é a HERANÇA,quando uma classe esta amarrada a outra e o Encapsulamento faz toda a diferença tambem, pq alguns metos e atributos seram enxergados apenas na classe que define e dependendo do Encapsulamento ou do modificador de acesso que voce usou alguns metodos e atributos poderao ser enxergados na classe filha.Entao quando falarmos de HERENÇA nos vamos voltar a falar sobre esse assunto de Encapsulamento.

class Pessoa {

    public $nome = "Rasmus Lerdorf";//Publico, todos tem acesso
    protected $idade = 48;//So que esta dentro da propria classe ou herdeiros podem enxergar
    private $senha = "123456";//Nem mesmo os herdeiros tem acesso, so que esta dentro da classe

    public function verDados(){

        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";

    }

}

$objeto = new Pessoa();

//echo $objeto->senha . "<br/>";

$objeto->verDados();