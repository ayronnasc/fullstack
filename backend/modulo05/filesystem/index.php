<?php

echo __DIR__ . '<br>'; // indica em que pasta do servidor esta o script
$files = scandir(__DIR__); // verifica a pasta
print_r($files);

mkdir(__DIR__ . "/aaa/bbb", recursive:true); // o recursivo permite criar pastas dentro de pastas

$file = filesize('index.php'); // retorna em bytes
$file = pathinfo("index.php"); // retorna informacoes do arquivo como nome, extensao, nome da pasta e nome base
print_r( $file); 

file_put_contents('file1.txt', 'texto do arquivo');

file_put_contents('file_2.txt', time() . PHP_EOL, FILE_APPEND); // FILE_APPEND, permite que ao inves do texto ser substituido, ele eh acrescentado