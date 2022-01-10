<?php

//! Autoload
//? Bom nós já tivemos uma aula explicando sobre o include_once e require_onde, onde o  require_onde é disparado o mais interessante;Que é para um arquivo incluir outro. Agora tente imaginar o seguinte você lá desenvolvendo seus aplicativos seus projetos em PHP e de repente você percebeu que você possui uma serie de classes cada classe normalmente é um arquivo físico PHP, então por exemplo a classe automóvel é automóvel.php ou altomovel.class.php , que agora a gente criou o exemplo01.php por exemplo a gente colocou a classe e ja usou a classe no proprio arquivo pra ficar didatico , Apartir de agora iremos ter um arquivo com o mesmo nome da classe salvo no php e a gente ira incluir esse arquivo no nosso projeto so para usar aquela classe, É interessante porque voce vai ter um classe em cada arquivo php. Agora tente imaginar uma parte do seu projeto que é um pouco mais complexa, nesse caso talvez ela precisa de 4 ou 5 classes, sera que voce vai ter que ter um require_once para cada uma dessas classses entao é ai q entra o autoload, como o nome ja diz carregue automaticamente é uma funcao que voce consegue colocar dentro do php para que ele carregue as classes automaticamente sem precisar do require e para isso basta voce dizer por exemplo, $carro = new automovel(); entao a paralavra chama 'new' vai invocar a funcao autoload se ela foi definida,nos ja falamos sobre voce ter um arquivo de configuração, um arquivo que voce coloca as principais configuraçoes do seu projeto , entao a funcao autoload ficaria detrno do seu arquivo e esse arquivo sim viria sim como um include em cada um dos seus projetos o grande barato nesse caso é que uma vez que eu der um 'new' e o nome da classe ele ja vai procurar dentro da funçao autoload aonde esta esse arquivo fisico e vamos aprender uns recursos novos e uteis para se trabalhar com autoload no PHP usando tmb as funcoes SPL

//autoload é como uma função magica por isso os '__' antes do autoload

//! DICA PHP8: Embora a função __autoload() também pode ser utilizada para carregar automaticamente classes e interfaces, é preferível a utilização da função spl_autoload_register(). Por que é uma alternativa mais flexível (permitindo que vários autoloaders sejam especificados na aplicação, assim como bibliotecas de terceiros). Por esta razão, o uso da função __autoload() é desencorajado e pode se tornar obsoleta em versões futuras.


/** O que fazer quando tivermos classes que estão em pastar diferentes ou em vários lugares onde eu precise buscar.As vezes você pode usar seu código PHP ate mesmo com alguns sistemas prontos,exemplo: DRUPAL ou WORDPRES,qualquer um desses e eles já iram ter o autoload deles.Ou seja ele sabe onde ele procura as suas prróprias classes,mas voc^^e está fazendo o seu sistema e você também tem um outro repositório de classes,o seu próprio.E agora?
 * O PHP da outro recurso pra vocÊ e a gente vai ver agora um exemplo:
 * Vamos usar um função que a gente consegue registrar mais de uma função como funções de autoload
 * No parametro 'spl_autoload_register()' você pode ter duas opções;Você pode por uma string e simplesmente por o nome da função que você quer que chame ou por a função dirematemente
 */

function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse.".php");
        //require_once $nomeClasse .'.php';
    }

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

    if(file_exists("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php")===true){
        require_once("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    };

});

$carro = new DelRey();

$carro->acelerar(80);