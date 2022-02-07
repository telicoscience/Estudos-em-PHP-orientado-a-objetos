<!-- 
    Aula 03 - Getters e Setters 
    POO com PHP
 -->
 <?php
 class Login{
     private $email; 
     private $senha; 

    /* 
    Conteúdo da aula de construtores. 
    O que são construtores? São métodos
    */
    public function __construct($email, $senha, $nome){
        $this->nome = $nome; 
        $this->setEmail($email); 
        $this->setSenha($senha); 
    }

    public function getNome(){
        return $this->nome; 
    }

    //Fim do conteúdo de construtores
     public function getEmail(){
        return $this->email; 
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL); 
        $this->email = $email; //a variável e é passada por parâmetro

    }
    public function getSenha(){
       return $this->senha; 
   }
   public function setSenha($s){
       $this->senha = $s; //a variável e é passada por parâmetro

   }
     public function Logar(){

     

         if($this->email == "teste@teste.com" and $this->senha =="123456"):
         echo "Logado com sucesso"; 
     else: 
        echo "Dados inválidos"; 
     endif;
     }
 }
 //instanciando a classe Login 

 $logar = new Login("teste@teste.com", "123456", "Rodrigo Oliveira"); 
 $logar->setEmail("teste@teste.com"); 
 $logar->setSenha("123456");
 
 $logar->Logar();
 echo "<br>"; 
 echo $logar-> getEmail();
 echo "<br>"; 
 echo $logar->getNome();
 //motivo para acessar o set ao invés de atributo
 /* 
 É possível filtrar alguns caracteres que não são aceitos. A função filter_var permite filtrar caracteres indesejados
 */