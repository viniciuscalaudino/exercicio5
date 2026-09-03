<?php

$tags = [
    'php',
    'html',
    'css',
    'php', 
    'javascript', 
    'html', 
    'css', 
    'python'
];

$remover = array_unique($tags);
$tagsLimpa = array_values($remover);

print_r($tagsLimpa);
