<?php

$turma = [
    'Ana',
    'Bruno',
    'Carlos'
];

$turmaB = [
    'Diana',
    'Eduardo',
    'Fernanda'
];

$turmas = array_merge($turma, $turmaB);

print_r($turmas);