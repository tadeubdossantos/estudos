<?php

/*

    

*/

namespace Cliente;                      //Definição do "namespace" deste arquivo (como padrão será igual ao  nome da pasta)

class Cadastro extends \Cadastro{       //Referência a classe pai que está numa pasta de nivel anterior
    
    public function registrarVenda(){
        
        echo "Foi registrado uma venda para o cliente ".$this::getNome();
    }
    
}

?>
