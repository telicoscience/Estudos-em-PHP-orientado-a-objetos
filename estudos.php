<!-- 
Aula 2 do curso de POO com PHP da Node Studio Treinamentos disponnível no YouTube
em https://www.youtube.com/watch?v=eWW5M1n2Pq8&list=PLwXQLZ3FdTVEau55kNj_zLgpXL4JZUg8I&index=2
 -->
 <?php
echo "<h1> Página de estudos em PHP orientado a objetos</h1>";
class Pessoa {
    public $nome; 
    public $idade; 

    public function Falar(){ //cria uma função ou um método 
        echo $this->nome." de ".$this->idade."anos  acabou de falar"; 
    }

}

//instanciar uma classe 
$rodrigo = new Pessoa(); 

$rodrigo->nome = "Rodrigo Santos de Oliveira ";
$rodrigo->idade = 25; 
$rodrigo->Falar();  
