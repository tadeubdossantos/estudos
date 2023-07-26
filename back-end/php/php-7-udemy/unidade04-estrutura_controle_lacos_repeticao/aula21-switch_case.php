<?php
    
    /* A diferença entre o if-else e o switch case é que neste se for um valor igual a x faça tal coisa, se for outro valor igual a y faça outra coisa, e assim sucessivamente, enquanto que no if-else aborda se o valor for maior que alguma coisa fala tal coisa e assim sucessivamente */

    $diaDaSemana = date("w");
    
    switch ($diaDaSemana){
        
        case 0:                 //If for valor "0"
        echo "Domingo!";        //Executa o Comando
        break;                  //Para não continuar executando outro case
            
        case 1:
        echo "Segunda-Feira";
        break;
            
        case 2:
        echo "Terça-Feira";
        break;
            
        case 3:
        echo "Quarta-Feira";
        break;
            
        case 4:
        echo "Quinta-Feira";
        break;
        
        case 5:
        echo "Sexta-Feira";
        break;
            
        case 6:
        echo "Sábado";
        break;
            
        default:                    //Se nenhum dos valores atender os cases
        echo "Data Inválida!";
        break;            
        
    }

?>  

    
    