<?php

$numbers1 = [1,2,3,4,5];
$numbers2 = [6,7,8,9,10];

// Junta os dois arrays anteriores
$merged = array_merge($numbers1, $numbers2);
var_dump($merged);

/* Alternativa para juntar os dois arrays 
usando spread (tradução: espalhar) */
$merged = [...$numbers1, ...$numbers2];
var_dump($merged);