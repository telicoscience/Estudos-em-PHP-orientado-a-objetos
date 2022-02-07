<?php
/* 
Aula 09 - Constantes, self e Parent
*/
class Pessoa{
    const nome = "Rodrigo"; 
    public function exibirNome(){
        echo self::nome; 
    }
}

class Rodrigo extends Pessoa{
    const nome = "Oliveira"; 
    public function exibirNome(){
        echo self::nome; 
    }
}
$rodrigo = new Rodrigo(); 
$rodrigo->exibirNome(); 

$pessoa = new Pessoa(); 
$pessoa->exibirNome(); 