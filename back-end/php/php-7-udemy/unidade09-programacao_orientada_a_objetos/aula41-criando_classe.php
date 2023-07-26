<?php
 
class Pessoa{
    
    //Atributos
    public $nome;
    
    
    //Métodos
    public function falar(){
        //Variável "$this" refere-se que é dentro do do contexto da classe
        return "O meu nome é ".$this->nome;
    }
}

//Par de parenteses "()" é opcional na instanciação
$p = new Pessoa();
$p->nome = "Tadeu";
echo $p->falar();


?>


    
    