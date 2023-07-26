<?php
 
//Encapsulamento - proteger; controlar acesso; também chamdo de modificador de acesso; permite controlar o acesso de atributos e métodos em diversas circunstancias; forma de controlar quem pode ou não acessar um atributo ou método; ajuda proteger as informações e organizar de que forma poderá ser acessado e quem será permitido de acessar; 

class Pessoa{
    
    public      $nome = "Rasmus Lerdorf";
    protected   $idade = 48;
    private     $senha = "123456";
    
    public function verDados(){
        echo $this->nome."</br>";
        echo $this->idade."</br>";
        echo $this->senha."</br>";
    }
}

$objeto = new Pessoa();
//echo $objeto->nome."</br>";     //Atributo acessado, pois é público
//echo $objeto->idade."</br>";    Atributo acessado somente por métodos da classe que a pertecence e das classes filhas
//echo $objeto->senha."</br>";    Atriubuto acessado somente por métodos da classe que a pertence (+ restritivo)

$objeto->verDados();    //Método público 

//Quem pode acessar atributos e métodos: 1-atributos e métodos da mesma classe; 2-classes filhas; 3-atributos e métodos acessados pelo objeto
//Público   - todo mundo vê
//Protected - mesma classe e classes filhas (ou extendidas)
//Private   - somente a mesma classe 

class Programador extends Pessoa{   //Classe programador vai estender tudo que tem na classe Pessoa
    
    public function verDados(){     //Sobrescrever o método pai
        
        echo get_class($this);      //Verifica qual de qual classe o objeto está chamando o método "verDados" (No caso é da classe Programador)
        
        echo $this->nome."</br>";
        echo $this->idade."</br>";
        echo $this->senha."</br>";  //Atributo privado (acessado somente por objetos de mesma classe)
    }
}

$obj = new Programador();
$obj->verDados();
?>


    
    