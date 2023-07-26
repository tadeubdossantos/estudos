<?php
 

class carro{
    
    // Atributos Privados (Meio de proteção onde somente podem ser acessados por meio de métodos)
    private $modelo;
    private $motor;
    private $ano;
        
    // Métodos Getters e Setters permitem acessarem o atributo quando estes são privados
    //Métodos Públicos
    public function getModelo(){    //Convenção de se utilizar nomes com início e minusculo e outra palavra em maisculo
        return $this->modelo;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getMotor():float{   //Definição de tipo de dado para ser retornado pelo método
        return $this->motor;
    }
    
    public function setMotor($motor){
        $this->motor = $motor;
    }
    
    public function getAno():int{   //Definição de tipo de dado para ser retornado pelo método
        return $this->ano;
    }
    
    public function setAno($ano){
        $this->ano = $ano;
    }
    
    public function exibir(){
        return array(
            "modelo" => $this->getModelo(),
            "motor"  => $this->getMotor(),
            "ano"    => $this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol GTI");
$gol->setMotor("2.0");
$gol->setAno("1995");

//Exibir todas as informações do objeto
print_r($gol->exibir());

echo "<br><br>";

//Exibir o tipo de dado
var_dump($gol->exibir());





?>


    
    