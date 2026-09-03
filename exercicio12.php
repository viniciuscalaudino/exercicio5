<?php

$fila = [
    'primeiro',
    'segundo',
    'terceiro',
    'quarto',
    'quinto'
];
$invertido = array_reverse($fila);

print_r($invertido);

echo "<br>";

echo"Laço manual : ";
for($i = count($fila) - 1 ; $i >= 0 - 1; $i--){
    echo$fila[$i].  PHP_EOL;
}

