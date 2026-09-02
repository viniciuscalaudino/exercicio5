<?php

$produtos = [
    'Whey' => 100.00,
    'Geladeira electrolux' => 3324.00,
    'Nootbook' => 5954.00,
    'Celular' => 1169.10,
    'Mouse' => 250.00
];

asort($produtos);

foreach($produtos as $compras => $valor){
    echo $compras. " : ". "R$". $valor. "<br>";
}