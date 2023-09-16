<?php

// $name = 'Tadeu';

// if(isset($name)) {
//     var_dump($name);
// }else{
//     var_dump('name does not exist!');
// }

// simplifica o código anterior usando ?? ao invés do isset
var_dump($name ?? 'name does not exist!');