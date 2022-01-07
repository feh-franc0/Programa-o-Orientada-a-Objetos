<?php

//!HERANÇA
//?QUANDO UMA CLASSE HERDA ATRIBUTOS E METODOS DESDE QUE SEJAM PUBLICOS OU PRETEGIDOS DE UMA CLASSE PAI.

class Documento{

    private $numero;

    public function getNumero(){
    
        return $this->numero;

    }

    public function serNumero($n){

        $this->numero = $n;

    }
    
}

class CPF extends Documento{

    public function validar():bool{

        $numeroCPF = $this->getNumero();

        //validação do CPF

        return true;

    }
    
}

$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();