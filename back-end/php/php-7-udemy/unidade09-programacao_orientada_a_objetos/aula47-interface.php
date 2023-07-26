<?php
 
/*

    Interface - são padrões pré-estabelecidos  
    Exemplo da Apple - cada equipe fazia uma parte sem saber como tal funcionalidade iria ser usado, e uma interface acessava essas funções
    Na Interface não se implementa a funcionalidade;
    Exemplo de uma equipe de programadores em que cada um programa uma funcionalidade diferente; um programador precisa acessar uma funcionalidade já pronta de outro programador e aí ele acessa por meio de uma interface, pois assim ele não precisa saber como o código está implementado detalhamente;
    Uma sugestão é usar interface para programadores que podem esquecer como foi implementado uma determinada funcionalidade no futuro, como validar CPF, pois basta ele chamar uma interface que faça isso e pronto, portanto não se preocupando como o código funciona.    
    As assinaturas dos métodos das Interfaces devem ser idênticas às da classe que a implementa
    Uma classe pode implementar várias interfaces
*/

interface Veiculo{              //Interface
    
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo{ //Classe que implementa a Interface "Veiculo"
    
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

$carro = new Civic();
$carro->acelerar(80);

?>


    
    