<?php

class Conta{
    
    //ATRIBUITOS
    private     $numConta;
    protected   $tipo;
    private     $dono;
    private     $saldo;
    private     $status;
        
    //MÉTODOS    
    function __construct(){
        $saldo  = 0;
        $status = false;
    }
        
    public function abrirConta($tipo, $numConta, $dono){
        $this->setTipo($tipo);
        $this->setnumConta($numConta);
        $this->setDono($dono);
        $this->setStatus(true);
        if ($tipo == "cc"){
            $this->saldo = 50;
        }
        else if ($tipo == "cp"){
            $this->saldo = 150;
        }
    }
    
    public function fecharConta(){
        if ($this->saldo > 0){
            echo "<p>Conta com Dinheiro! </p>";
        }
        else if ($this->saldo < 0){
            echo "<p>Conta em Débido! </p>";
        }
        else{
            $this->setStatus(false);
        }
    }
    
    public function depositar($deposito){
        if ($this->status == true){
            $this->saldo = $this->saldo + $deposito;
        }
        else{
            echo "<p>Conta já foi cancelada ! Impossível sacar !</p>";
        }
    }
    
    public function sacar($saque){
         if ($this->status == true){        
            if ($saque > $this->saldo){
                echo "<p>Valor de saque superior ao valor depositado em conta !</p>";
            }
            else{
                $this->saldo = $this->saldo - $saque;
            }            
         }
        else{
            echo "<p>Conta já foi cancelada ! Impossível sacar !</p>";
        }
    }
    
    public function pagarMensal(){
        $valor = 0;
        if ($this->tipo == "cc"){
            $valor = 12;
        }
        else if ($this->tipo == "cp"){
            $valor = 20;
        }
        if ($this->status == true){ 
            $this->saldo = $this->saldo - $valor;
        }
    }
    
    public function consultarSaldo(){
        echo "<p>Seu saldo é de R$ " . $this->getSaldo() . "</p>";
    }
    
    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }
    
    public function getNumConta(){
        return $this->numConta;
    }
    
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
     public function getTipo(){
        return $this->tipo;
    }
    
    public function setDono($dono){
        $this->dono = $dono;
    }
    
     public function getDono(){
        return $this->dono;
    }
    
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    
    public function getSaldo(){
        return $this->saldo;
    }
    
    public function setStatus($status){
        $this->status = $status;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
}


?>