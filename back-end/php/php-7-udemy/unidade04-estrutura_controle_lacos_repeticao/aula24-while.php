<?php
    
    /* FAÇA ENQUANTO - Muito utilizado no para Banco de Dados (Enquanto estiver dados no banco retorna) / Enquanto a codição for verdadeira execute */

    $condicao = true;

    while ($condicao){      //Enquanto condição verdadeira, execute o bloco de códigos a baixo
        $numero = rand(1,10);
        
        if ($numero == 3){
            echo "TRÊS!!!";
            $condicao = false;
        }
        
        echo $numero." ";
    }
    
    echo "<br/>";
    
    $total = 150;
    $desconto = 0.90;   //Desconto de 10%

    do{                 //Pelo menos uma vez é atribuido desconto
        $total *= $desconto;
    }while ($total > 100);
    
    echo $total;
    
?>  

    
    