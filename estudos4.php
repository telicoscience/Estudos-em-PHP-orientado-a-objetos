<?php
/* 
Aula 07 - Modificadores de Acesso Parte 2 */
class Veiculo {
    public $modelo; 
    public $cor; 
    public $ano; 

    //Os métodos também podem ser públicos, privados ou protegidos
    private function Andar(){
        echo "andou"; 
    }

    public function Parar(){
        echo "parou"; 
    }

    public function mostrarAcao(){
        $this->Andar();
    }

}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Ligando limpador em 321"; 
    }
    public function mostrarAcao(){
        $this->Andar();
    }

}

class Moto extends Veiculo{


}

$carro = new Veiculo(); //Se colocar carro, ele não consegue acessar o atributo modelo que está privado em Veiculo. Mas se colocar veiculo, funciona 
$carro->mostrarAcao();