<?php
 
/*
    Classe Abstrata - é um tipo de classe que não se permite instanciar um objeto; para usá-la é necessário uma outra classe que vai estender a classe abstrata; uma classe só vai herdar de uma classe abstrata mas uma classe pode implementar várias interfaces
    A interface só declara o que você precisa colocar na sua classe, já a classe abstrata o que você definiu e estendeu, você não precisa chamar os métodos pois eles já podem ser utilizados da forma que foram definidos
    
*/

interface Veiculo{              //Interface
    
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{ //Classe que implementa a Interface "Veiculo"
    
    public function acelerar($velocidade){
        echo "O veículo acelerou até ".$velocidade." km/h";
    }
    
    public function freiar($velocidade){
        echo "O veículo freiou até ".$velocidade. "km/h";        
    }
    
    public function trocarMarcha($marcha){
        echo "O veículo engatou a marcha ".$marcha;
    }
}

class DelRey extends Automovel{
    
    public function empurrar(){
        
    }
    
}

$carro = new DelRey();
$carro->acelerar(80);    
?>


    
    