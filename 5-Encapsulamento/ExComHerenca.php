<?php

//Encapsulamento extendendo de uma herenca

class Pessoa{

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";
    
    public function verDados(){

        //Saber em qual classe esse metodo esta sendo exxecutado
        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }
    
}

class Programador extends Pessoa {

    public function verDados(){

        //Saber em qual classe esse metodo esta sendo exxecutado
        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }
    
}

$objeto = new Programador();

//echo $objeto->senha . "<br/>";

$objeto->verDados();