<?php
 
    //Parâmetros de Funções ou também conhecidos como argumentos
    //Informações que as funções precisam para trabalhar

    //Exemplo com parâmetro
    function ola($texto){
        
        echo "Olá $texto <br/>";
    }

    ola("Tadeu!");
    ola("Pessoal!");
    ola("Brasil!!!");
    
    //Exemplo passando parâmetro com um valor padrão
    function ola2($texto = "Povão !!"){
        
        echo "Olá $texto <br/>";
    }

    ola2();

    //Exemplo passando dois parâmetros com valores padrões com retorno
    function ola3($texto = "mundo", $periodo = "Bom dia"){
        
            return "Olá, $texto! $periodo </br>";
    }

    echo ola3();
    echo ola3("","Boa noite");
    echo ola3("Tadeu","Boa tarde");
    echo ola3("Patrícia","");

    //Exemplo passando dois parâmetros um valor obrigatório, um com valor padrão e retorno
    function ola4($texto, $periodo = "Bom dia!"){
         return "Olá, $texto! $periodo </br>"; 
    }
    
    echo ola4("Tadeu");             //O primeiro parâmetro é obrigatório já o segundo (padrão) já não é obrigatório

    //Exemplo de função que pode receber vários parametros ou não
    function ola5(){
        $argumentos = func_get_args();
        return $argumentos;
    }
    
    var_dump(ola5("Bom dia!", 1, true, "a"));
?>


    
    