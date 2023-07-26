<?php

/*

    Como sugestão é melhor utilizar definir o nome das classes com a letra inicial maisculo, assim como é definido os seus nome no código por conta de o linux diferenciar minusculo de maisculo

*/

class Cadastro{
    
    private $nome;
    private $email;
    private $senha;
    
    public function getNome():string{
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getEmail():string{
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getSenha():string{
        return $this->senha;
    }
    
    public function setSenha($senha){
        $this->senha = $senha;
    }
    
    public function __toString(){
        
        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha(),        
        ));
    }
}

?>
