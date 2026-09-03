<?php

$precos= [
    100,
    250,
    80,
    320,
    150
];

echo "Array original : ";
print_r($precos);

echo "<br>";

echo "Array com desconto : ";
$arrayDesconto = array_map(fn($desconto) => $desconto - $desconto * 0.10, $precos);
print_r($arrayDesconto);