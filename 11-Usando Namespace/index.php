<?php

//!NAMESPACE
//? BOAS PRATICAS DE PROGRAMAÇÃO USANDO CONCEITO DE POO
//* 1-Uma das boas práticas é você ter um diretório para suas classes e de prefêrencia que você organize essas informações(não pondo um monte de classes tudo em um diretorio só).Então não é só colocar dentro de uma pasta,mas sim organizar por assuntos,então é interessante a gente organizar os assuntos da classe usando o namespace.

//! O QUE É NAMESPACE
//? Ele permite a gente agrupar as classes dentro de diretórios de uma forma organizada.Como você falou não adianta a gente ter lá uma pasta com todas as classes dentro e achar que isso está organizado, na verdade quando você tem daus ou três classes é uma situação, mas quando se passa a ter dezenas de classes é outra coisa que acontece é você ter classes com o mesmo nome isso uma hora ou outra vai acabar acontecendo, só que uma classe se refere talvez a um determinado assunto e outra classe com o mesmo noma a outra, só para ter o mesmo nome ,Então se você for colocar na mesma pasta não vai deixar que aqueles com o mesmo nome e o próprio sistema operacional não vai deixar, se você não tiver organizado você pode puxar o aarquivo errada. O PHP também não vai deixar você criar duas classes com o mesmo nome ai é onde entra a diferenciação, você dividi em espaços diferentes por isso nem pense em dar um nome para esses espaços, então nós vamos entender bem o que é isso antes da gente falar sobre o nome exxperiência a gente vai criar um altoloud e criar nossa pasta de classes organizadas. Nesse projeto isso já falamos sobre autoload então não vamos entrar em detalhes se você tiver alguma dúvida, ainda dá uma assistida novamente sobre algo de altoloud , e aí depois que a gente fizer isso confirme essa pasta configuração. Aí a gente já começa a mostrar como é que se usa o Namespace, vamos criar novamente as classes você já aprendeu que ali os nossos netos nossas setas alguns métodos magicos normalmente a gente sempre vai cirar aí talvez um construiction ou um toostring e assim por diante e ai você vai ver onde vai entrar o namespace nesse assunto,VAMOS POR A MÃO NA PRATICA ENTAO: 
/////////////////////////////////////////////////////////////////////////

require_once("config.php");

use Cliente\Cadastro;//*Precisamos usar a nossa classe la do namespace,para fazer isso,para usar o namespace use o palavra 'use' e o que voce quer usar
//? o que voce quer usar? use 'O namespace Cliente'\'A classe Cadastro';
//*Isso quer dizer que a classe cadastro nesse ambiente aqui/nesse arquivo vai ser referente a classe que esta dentro do namespace Cliente

$cad = new Cadastro();//? É a classe que está dentro do namespace Cliente

$cad->setNome("Fernando Franco");
$cad->setEmail("Franco@gmail.com");
$cad->setSenha("franco54321");

$cad->registrarVenda();