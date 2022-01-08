<?php

//! Classes Abstratas:
//? classes abstratas é semelhante a interfaces, a diferenca basica é que na classe abstrata nos n so definimos quais sao os metodos que precisam ter mas tambem definimos o que eles fazem . A diferenca de uma classe abstrata para uma classe comum é que o objeto nunca vai instanciar a classe abstrata.
//* Então a gente cria uma classe abstrata defino o metodo que vai ter, o que ele faz e pra usar-la temos que criar uma segunda classe que vai estender dessa classe abstrata e ai vai respeitar essas definições . 

//! Uma diferença básica tmb entre classe Abstrata e Interface é que uma CLASSE vai herdar só de uma classe abstrata mas uma CLASSE pode implementar varias interfaces.

//! Outro fato importante, a Interface ela so declara o que voce precisa colocar na sua classe,já na Classe Abstrata não uma vezz que voce ja definiu na classe abstrata e extendeu voce não precisa mais chamar aqueles metodos, eles ja podem ser ultilizados da maneira como foram definidos na Classe Abstrata

//? POR EXTENDER A CLASSE ABSTRATA, E A CLASSE ABSTRATA IMPLEMENTAR  A INTERFACE AUTOMATICAMENTE A SUA CLASSE JA ESTA IMPLEMENTANDO, RESPEITANDO ESSA HIERARQUIA.

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        echo "O veículo acelerou até " . $velocidade . " Km/h";
    }

    public function frenar($velocidade){
        echo "O  veículo frenou até " . $velocidade . " Km/h";
    }

    public function trocarMarcha($marcha){
        echo "O veículo engatou a marcha " . $marcha;
    }
    
}

class DelRey extends Automovel{//Nao se pode instanciar uma classe abstrata(nesse caso Automovel), então atribuimos ele a DelRey

    public function empurrar(){



    }
    
}

$carro = new DelRey();

$carro->acelerar(200);

