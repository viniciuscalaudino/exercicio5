<?php

$idades = [
    12,
    18,
    25,
    15,
    30,
    17,
    21,
    16
];

$novoArray = array_values(array_filter($idades, fn($valor) => $valor >= 18));


print_r($novoArray) ;