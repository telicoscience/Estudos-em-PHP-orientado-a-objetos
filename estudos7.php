<?php
/*Aula 10 - Métodos e atributos estáticos */

class Login{
    public static $user; //Criando um atributo estático
    //criando um métido estático
    public static function verificaLogin(){
        echo "O usuário ".self::$user. " está logado"; 
    }
    public function sairSistema(){
        echo "O usuário deslogou"; 
    }
}
/* Quando trabalhamos com métodos estáticos, não precisamos mais instanciar a classe.
O this não funciona com métodos abstratos - precisamos usar o self   
 */
 Login::$user = "admin"; 
 Login::sairSistema(); 
