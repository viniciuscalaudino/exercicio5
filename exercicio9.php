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

array_splice($letras, 0, 2);

print_r($letras);