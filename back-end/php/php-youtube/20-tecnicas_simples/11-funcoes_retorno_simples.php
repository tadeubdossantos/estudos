<?php

// temos uma função de uma linha somente
// function sum(int $num1, int $num2) {
//     return $num1 + $num2;
// }
// var_dump(sum(1,2));

// como alternativa podemos usar arrow function (função anônima)
$sum = fn (int $num1, int $num2) => $num1 + $num2;
var_dump($sum(1,2));
