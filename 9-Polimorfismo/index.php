<?php

//! POLIMORFISMO
//? O que é POLIMORFISMO? Vem do grego que significa 'MUITAS FORMAS/TER MUITAS FORMAS', Então imagina um metodo que temos na CLASSE PAI , e um metodo com o mesmo nome na CLASSE FILHO , que faz outra coisa. Entao isso é polimorfismo, quando metodos com o mesmo nome em classes diferentes(herdadas) tem um comportamento diferente
//* muito ultilizado quando trabalhamos com herença.

abstract class Animal {

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }

}

class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }
    
}

class Gato extends Animal{
    public function falar(){
        return "Mia";
    }    
}

class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e " . parent::mover();//'parent::' chama da classe pai o mover();
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "---------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "---------------------------<br/>";

$ave = new Passaro();

echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";