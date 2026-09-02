<?php

$cidades = ['São Paulo', 'Rio de Janeiro', 'Curitiba', 'Belo Horizonte', 'Salvador'];
$posicao = array_search('Curitiba', $cidades);

if(in_array('Curitiba', $cidades)){
    echo "A cidade deseja esta dentro do array na posição $posicao";
}
else{
    echo"Cidade não encontrada";
}