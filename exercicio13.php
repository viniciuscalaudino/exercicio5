<?php

$salarios = [
    2500,
    3200,
    1800,
    4500,
    2900,
    3700
];

$soma = array_sum($salarios);
$media = $soma/count($salarios);
$maior = max($salarios);
$menor = min($salarios);

echo "a) total dos salários : $soma <br> b) média salarial : $media <br> c) maior salário : $maior menor salário : $menor ";