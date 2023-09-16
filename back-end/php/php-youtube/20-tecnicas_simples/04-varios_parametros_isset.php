<?php

$name = 'Tadeu';
$age = 34;
$color = 'blue';

//Ao invés de usar 3 issets posso usar somente 1
if(isset($name, $age, $color)){
    var_dump('execute');
}