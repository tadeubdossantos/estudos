<?php

//Early return (Retorno Rápido)

function getStatus(int $isAdmin) {
    if($isAdmin) {
        // ao retornar o código já para aqui, não necessitando e 'else' mais abaixo
        return 'é admin!';
    }
    
    // não necessita de 'else'
    return 'não é admin!';
}

var_dump(getStatus($isAdmin = 1));