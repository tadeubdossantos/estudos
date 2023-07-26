<?php
 
/*
    Herança - quando uma classe herda atributos e métodos, desde que sejam públicos ou protegidos, de uma classe pai
    Classe Pai - seria uma classe mais genérica ou base
    Classes Filhas - mais específicas e herdam atributos e métodos da classe pai. 
    Ex: Automóvel (Classe Pai), Carro, Caminhonete, Onibus (Classes Filhas) 
    Abstração - qual genérico eu consigo fazer uma classe q/ permite ela ser usada em diversos lugares
    Pergunta: A classe pai pode acessar atributos e métodos da classe filha? Não, somente a classe filha acessa atributos e métodos da classe pai
*/

class Documento{
    
    private $numero;
    
    public function getNumero(){
        return $this->numero;
    }
    
    public function setNumero($num){
        $this->numero = $num;
    }
}


class Cpf extends Documento{            //Classe filha da classe "Documento"
    
    public function validar():bool{
    
        $numeroCPF = $this->getNumero();  //Acessa o atributo da classe pai
        
        //Validação do CPF
        
        return true;    
    }
}

$doc = new CPF();
$doc->setNumero("12345679");    //Acessa método da classe pai
var_dump($doc->validar());      //Validação do CPF
echo "</br>";
echo $doc->getNumero();           //Acessa método da classe pai
?>


    
    