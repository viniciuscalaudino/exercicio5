<?php

$turma = [
    'Maria' => [
        'nota1' => 6,
        'nota2' => 7,
        'nota3'=> 8
    ],
    'Rafael' => [
        'nota1' => 9,
        'nota2' => 7, 
        'nota3'=> 8
    ],
    'Victoria' => [
        'nota1' => 6, 
        'nota2' => 5, 
        'nota3'=> 10
    ],
    'José' => [
        'nota1' => 7, 
        'nota2' => 5, 
        'nota3'=> 3
    ],
    'Esmeralda' =>[
        'nota1' => 4, 
        'nota2' => 9, 
        'nota3'=> 8
    ],
];

foreach($turma as $alunos => $notas){
    $media = ($notas['nota1'] + $notas['nota2'] + $notas['nota3']) / 3;

    if($media < 0 || $media > 10){
        echo "Valor invalido";
    }
    elseif($media >= 7){
        echo "$alunos : Aprovado(a) <br> Média : $media <br> ";
    }
    else{
       echo  "$alunos : Reprovado(a) <br> Média : $media <br> ";
    }
}