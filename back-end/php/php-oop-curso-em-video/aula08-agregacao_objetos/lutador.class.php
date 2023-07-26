<?php


class lutador{
    
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    //Métodos Especiais
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);          
    }
    
    //Métodos
    public function apresentar(){
        echo "<p>----------------------------</p>";
        echo "<p>CHEGOU A HORA DE ENTRAR O LUTADOOOOR, ".$this->getNome();
        echo "<p>SEU PAIS DE ORIGEM É ".$this->getNacionalidade();
        echo "<p>TEM ".$this->getIdade()." ANOS DE IDADE, ".$this->getAltura()." de altura e tem ".$this->getPeso()." kg</p>";
        echo "<p>ELE TEM ".$this->getVitorias()." vitórias, ".$this->getDerrotas()." derrotas e ".$this->getEmpates()." empates</p>";        
    }
    
    public function status(){
        echo "<p>----------------------------</p>";
        echo "<p>".$this->getNome()." é peso ".$this->getCategoria();
        echo "<p>Já ganhou ".$this->getVitorias()." vezes </p>";
        echo "<p>Já derrotas ".$this->getDerrotas()." vezes </p>";
        echo "<p>Já empates ".$this->getEmpates()." vezes </p>";       
    }
    
    public function ganharLuta(){
        $this->vitorias += 1;
    }
    
    public function perderLuta(){
        $this->derrotas += 1;
    }
    
    public function empatarLuta(){
        $this->empates += 1;
    }
    
    //SETTERS
    private function setNome($nome){
        $this->nome = $nome;
    }
    
    private function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }
    
    private function setIdade($idade){
        $this->idade = $idade;
    }
    
    private function setAltura($altura){
        $this->altura = $altura;
    }
    
    private function setPeso($peso){
        $this->peso = $peso;
        if ($peso <52.2){
            $this->categoria = "invalido";
        }
        else if ($peso <=70.3){
            $this->categoria = "leve";
        }
        else if ($peso <=83.9){
            $this->categoria = "medio";
        }
        else if ($peso <=120.2){
            $this->categoria = "pesado";
        }
        else{
            $this->categoria = "invalido";
        }                
    }
    
    private function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    
    private function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }
    
    private function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }
    
    private function setEmpates($empates){
        $this->empates = $empates;
    }
    
    //GETTERS
    public function getNome(){
        return $this->nome;
    }
    
    private function getNacionalidade(){
        return $this->nacionalidade;
    }
    
    private function getIdade(){
        return $this->idade;
    }
    
    private function getAltura(){
        return $this->altura;
    }
    
    private function getPeso(){
        return $this->peso;
    }
    
    public function getCategoria(){
        return $this->categoria;
    }
    
    private function getVitorias(){
        return $this->vitorias;
    }
    
    private function getDerrotas(){
        return $this->derrotas;
    }
    
    private function getEmpates(){
        return $this->empates;
    }
}

?>