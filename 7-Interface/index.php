<?php

//!INTERFACE
//?Então existem três situações onde a Interface é realmente importante.
//*1-Uma delas se você trabalha sozinha, um programador solitário;Você pode usar a interface para organizar o seu próprio código.
//*2-Se você trabalha em equipe com vários programadores interferência é mais interessante.
//*3-Nesse caso é quase obrigatório, é quando você está programando um código que vai conversar com um terceiro.

//*?E tudo isso porquê.Porque ele vai definir padrões então na interface você fala assim;As classes que implementar essa interferência ou seja, eu preciso fazer certa coisa um documento.Então ela precisa ter um método de validação do documento ou um método que vai salvar esse documento no banco de dados e assim por diante.Você obriga ele ter um determinado padrão.Então se o sistema é muito grande você está programando sozinho lá no futuro quando você falar:'ai, preciso fazer um novo tipo de documento,mas eu lembro mais que precisava ter no documento(na classe documento)' . Mas ai eu sei que tem uma interface para documento.Então você implementa interface do documento e ele vai te obrigar,o PHP fala:'Tem um método aqui que não foi implementado'.Se precisar fazer isso aqui eu não sie como é que faz.
 
//?Se for uma equipe então o outro programador ele vai criar alguma coisa que ele não faz nem ideia, nunca nem chegou a ver . Mas ai voce fala :'implementa na interface tal que ela vai te lembrar o que você precisa fazer'. A interface vai definir esses padroes para você. 

//!INTTERFACE:
//?Criamos o codigo e quem usar essa interface ou implementar-la(usar-la), tem q ter um metodo com esse 'nome', tem que ser 'publico', tem que ter um metodo com esse 'nome', tem que ser 'privado', tem que ter um metodo com esse 'nome', tem que receber 'tantos' parametros.
//*Entao a interface ela so diz quais sao os metodos que deveme existir, qual o tipo de declaracao dele e que parametros ele deve receber, ai damos o nome para essa interface.

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo{

    public function acelerar($velocidade){

        echo "O veículo acelerou até ". $velocidade . "Km/h";

    }

    public function frenar($velocidade){

        echo "O veículo frenou até ". $velocidade . "Km/h";

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " . $marcha;

    }
    
}

$carro = new Civic();

$carro->trocarMarcha(1);