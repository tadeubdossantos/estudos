<?php

$numbers1 = [1,2,3,4,5];

// encontrar um elemento do array, no caso o 3
foreach($numbers1 as $number) {
    if($number == 3) {
        var_dump('encontrou o 3');
        break;
    }
}

// melhor forma para encontrar o mesmo elemento dentro do array
$key = array_search(3,$numbers1);
var_dump($numbers1[$key]);



