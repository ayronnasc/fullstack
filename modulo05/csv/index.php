<?php 

$file = fopen('dados.csv', 'w');

// header das colunas
$header = ['Coluna A', 'Coluna B', 'Coluna C'];
fputcsv($file, $header);

// linhas

for ($i=1; $i <= 100 ; $i++) { 
    $linha = [rand(100, 999), rand(100, 999), rand(100, 999)];
    fputcsv($file, $linha);
}

fclose($file);

/*

fputcsv(
    'resource / ficheiro',
    'array com os dados',
    'caracter de separação entre os dados',
    'caracter de delimitação no caso de valores do tipo string',
    'caracter de escape em strings',
    'string de marcacao do final de linha'

)

*/