<!-- 
    Aula 05 
    Tema: Heranças
    É um recurso que permite que classes compartilhem atributos e métodos a fim de que classes 
    reaproveitem códigos ou comportamentos generalizados
 -->
 <!-- 
     Aula 06 - Modificadores de acesso 
     Public - Fará com que não haja ocultação nenhuma, toda propriedade ou método declarado como público 
     Protected - Faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos. 
     Private - faz com que qualquer método ou propriedade seja acessível somente pela classe que a declarou. 
  
    -->
 <?php
class Veiculo{
       
    //atributos

    protected $modelo; 
    public $cor; 
    public $ano; 
   
    //métodos 
   
    public function Andar(){
        echo "Andou"; 
    }
    public function Parar(){
        echo "Parou";
    }
    public function setModelo($m){
        $this->modelo = $m; 
    }
    public function getModelo(){
        return $this->modelo; 
    }
   
    
    
}

 class Carro extends Veiculo{
    public function ligarLimpador (){
        echo "Limpando em 3, 2, 1..."; 
    }
 }
 class Moto extends Veiculo{
     public function darGrau (){
         echo "Dando grau em 3, 2, 1..."; 
     }
    
 }

 //instanciando as classes carro e moto 
/*  $carro  = new carro(); 
 $carro->modelo = "Gol"; 
 $carro->cor = "Vermelho"; 
 $carro->ano = 2018; 
 var_dump($carro);
 echo "<br>";
 $carro->Andar();

 $moto = new Moto(); 
 $moto->modelo = "Honda Biz"; 
 $moto->cor = "Azul"; 
 $moto->ano = 2017; 
 echo "<br>";
 $moto->Parar();
 echo "<br>"; 
 var_dump($moto);
 echo "<br>";
 $carro->ligarLimpador(); 
 echo "<br>";
 $moto->darGrau();  */ 



 $veiculo  = new Veiculo(); 
 $veiculo->setModelo("CORSA"); 
 echo "<br>"; 
 echo $veiculo->getModelo(); 