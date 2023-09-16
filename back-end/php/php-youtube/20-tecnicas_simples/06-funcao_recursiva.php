<?php

/* função recursiva é aquela que chama ela mesma,
mas tem que tomar cuidado ao usar ela, pois pode
haver de ocorrer um loop infinito. Portanto para que
não ocorre esse retorno infinito precisa estabalecer
uma condição de freio, ou seja, parada de execução*/

function checkNumber(int $number){
    if($number == 10) {
        var_dump('Chegou a 10');
        return;
    }

    //função está chamada ela própria
    checkNumber($number+1);
}

checkNumber(1);
