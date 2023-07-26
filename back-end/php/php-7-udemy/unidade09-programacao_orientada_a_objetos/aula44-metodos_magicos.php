<?php
 

//Métodos Mágicos - Definição de o que será feito em toda vez que um objeto for instanciado, destruido, atrubuir um novo valor de atributo e entre outras ações. OBS: todos os métodos mágicos começaram com "__"
//Método Construtor - é executado toda vez que um objeto é instanciado (podendo o nome do método ser igual ao nome da classe, que está em desuso, ou "__construct")

class Endereco{
    
    private $logradouro;
    private $numero;
    private $cidade;
    
    //Método Construct - ação ao instanciar um objeto
    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }
    
    //Método Destruct - ação ao destruir um objeto
    public function __destruct(){
        var_dump("DESTRUIR");
    }
    
    public function toString(){
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }
}

$meuEndereco = new Endereco ("Rua Augusto Lithodo", 40, "Pres. Prudente");

var_dump($meuEndereco);

echo $meuEndereco->toString();

unset($meuEndereco);



?>


    
    