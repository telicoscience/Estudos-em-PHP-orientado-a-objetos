<?php
/* 
Aula 11 - Polimorfismo
*/
class Animal{
    public function Andar(){
        echo "O animal andou"; 
    }
    public function Correr(){
        echo "O animal correu"; 
    }
}

class Cavalo extends Animal{
    public function Andar(){
        $this->Correr();  //Polimorfismo significa reescrever um método herdado da classe pai
    }
}
$animal = new Cavalo(); 
$animal->Andar();  