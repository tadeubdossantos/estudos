<?php

$numbers1 = [1,2,3,4,5];

//inclui números no final do array
// $numbers1[] = 6;
// $numbers1[] = 7;
// $numbers1[] = 8;
// $numbers1[] = 9;

/*alternativa com menos linhas de código para
incluir elementos no final do array*/
array_push($numbers1,6,7,8,9);
var_dump($numbers1);



