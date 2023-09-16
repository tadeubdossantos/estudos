<?php

$numbers1 = [1,2,3,4,5];

/* remove uma posição o array, portanto somente será 
preservado os indices dos elementos existentes e não 
mais o indice 2 */
unset($numbers1[2]);
var_dump($numbers1);

//para resetar os índices do array
var_dump(array_values($numbers1));