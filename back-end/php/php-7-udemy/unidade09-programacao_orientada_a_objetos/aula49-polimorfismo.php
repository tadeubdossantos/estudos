<?php
 
/*
    Polimorfismo - quando métodos com mesmo nome em classes diferentes (pai e filho) assuem funcionalidades diferentes;
*/


abstract class Animal{          //Essa classe não vai ser permtida sua instanciação
    
    public function falar(){
        return "Som!";
    }
    
    public function mover(){
        return "Anda!";
    }
}

class Cachorro extends Animal{      //Classe filha da classe abstrata
    
    public function falar(){
        return "Late!";
    }
}

class Gato extends Animal{          //Classe filha da classe abstrata
    
    public function falar(){
        return "Mia!";
    }
}

class Passaro extends Animal{       //Classe filha da classe abstrata
    
    public function falar(){
        return "Canta!";
    }
    
    public function mover(){
        return "Voa e ".parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto->falar()."</br>";
echo $pluto->mover()."</br>";

echo "--------------------------</br>";

$tom = new Gato();
echo $tom->falar()."</br>";
echo $tom->mover()."</br>";

echo "--------------------------</br>";

$piupiu = new Passaro();
echo $piupiu->falar()."</br>";
echo $piupiu->mover()."</br>"; 


?>


    
    