<?php

function getStatus(int $isAdmin) {
    //Aplicação do Operador Ternário
    return  ($isAdmin) ? 'é admin' : 'não é admin';
}

var_dump(getStatus($isAdmin = 1));