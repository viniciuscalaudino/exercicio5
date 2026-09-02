<?php

$letras = [
    'A',
    'B', 
    'C', 
    'D', 
    'E', 
    'F', 
    'G', 
    'H'
];

array_splice($letras, 2, 5);

print_r($letras);