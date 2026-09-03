<?php

$estoque = [
    'PHP',
    'JavaScript',
    'Python',
    'Java'
];

$notas = [
    8.5,
    7.0,
    9.2,
    6.8

];




$combine = array_combine($estoque, $notas);
print_r($combine);
// ele cria um novo array combinado os elemtos do primeiro e segundo array, sendo o primeiro transformado em chaves e o segundo em nos valores.

echo "<br>";

$merge = array_merge($estoque, $notas);
print_r($merge);
// une os dois arrays, anexando o conteudo do segundo logo apos o primeiro acabar.
