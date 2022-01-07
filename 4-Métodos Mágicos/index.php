<?php

//!Não tem nada de mágicoo, apenas são coisas que acontecem fora da sua vista, Há algumas coisas que você faz,como usar os objetos que vão ser chamados métodos automaticamente sem que você veja(se você atribuir ou criar esses metodos magicos)
//?você pode sobrescrever esses métodos, você faz por exemplo toda vez que um objeto for instanciado,o que eu quero que você faça, o que precisa acontecer dentro desse objeto/ou quando o objeto for destruido/ou toda vez que atribuir um novo atributo a ele/ou removido/ ou buscado ,  enfim , você pode definir algumas ações para esses acontecimentos.
//* como uma pessoa ou ate mesmo um programador que esta usando seu objeto/sua classe não esta vendo o que acontece, o nome desse método se torna METODO MAGICO.

//!VOCE JA DEVE TER OUVIDO FALAR DE METODO CONSTRUTOR:
//? Caso nao tenha ouvido falar, O método construtor ele é um método normal.A gente cria ele público function e tal, so que ele é executado automaticamente quando a classe é instanciada na hora em que você coloca lá o '$NomeObj = new NomeClasse' , ele já pergunta se você chamou os parenteses ou não,mas tem algum método que é para executar automaticamente quando alguém chamar o 'new' e ai ele executa . Então ai ele é chamado de METODO CONSTRUTOR.
//* A regra para que ele seja um metodo construtor é que esse metodo tenha exatamento o mesmo nome da classe OU usar um metodo magico chamado '__construct', todos os metodos magicos sempre vao comecar com '__'(dois underline ) 
//* No PHP 7 e 8 usar o mesmo nome da classe esta caindo desuso, entao sempre use o '__construct()'

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this->logradouro =$a;
        $this->numero =$b;
        $this->cidade =$c;

    }

    /*
    public function __destruct(){

        var_dump("DESTRUIR");

    }
    */

    public function __toString(){

        return $this->logradouro.", ".$this->numero." - ".$this->cidade;

    }
    
}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");
/*
var_dump($meuEndereco);
unset($meuEndereco);
*/
echo $meuEndereco;