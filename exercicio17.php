<?php

$estoque = [
    'Camiseta' => 50, 
    'Calça' => 30, 
    'Tênis' => 15, 
    'Boné' => 80, 
    'Meia' => 100
];

echo "a)Nomes dos produtos: " ;
foreach($estoque as $produtos => $quantidade){
    echo $produtos. ",\n";
}

echo '<br>';

echo "b)Quantidades: ";
foreach($estoque as $produtos => $quantidade){
    echo $quantidade. ",\n";
}