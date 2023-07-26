<?php
    
    //o FOR é um laço de repetição que possui contador, condição para que seja executado e incremento

    for ($i=0; $i<10; $i++){
        echo $i . " ";       
    }

    echo "<br/><br/>";

    for ($i=0; $i<=10; $i++){
        echo $i . " ";       
    }
    
    echo "<br/><br/>";
   
    for ($i=0; $i<=1000; $i+=10){
        echo $i . " ";       
    }
    
    echo "<br/><br/>";
    
    for ($i=0; $i<=2000; $i+=10){
        
        if ($i >= 200 && $i <= 800) continue;       //Se condição for atendida ñ executa a linha de baixo e vai direto para o proximo loop
        
        if ($i == 900)  break;                      //Se essa condição for atendida o laço é terminado
        
         echo $i . " ";
    }

    echo "<br/><br/>";

    echo "<select>";

    for ($i=date("Y"); $i>=date("Y")-100; $i--){
        echo "<option value=".$i.">".$i."</option>";
    }

    echo "</select>";

?>  

    
    