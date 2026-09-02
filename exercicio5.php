<?php

$numeros = [
    4,
    7,
    20,
    77,
    2,
    6,
    12,
    9
];
$totalElementos = count($numeros);
$auxiliar = 0;



for($i = 0; $i <= $totalElementos; $i++){
    if($numeros[$i] > 10){
        $auxiliar++;
    }
}

echo "total de elementos : $totalElementos <br>" ;
echo " total de números maiores que dez : $auxiliar";