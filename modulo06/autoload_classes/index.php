<?php 

function carregar_classes($nome_da_classe){
    $path = 'classes/'.$nome_da_classe.'.php';
    if(file_exists($path)){
        require_once $path;
    }
}

spl_autoload_register('carregar_classes');

$humano = new Humano;
$animal = new Animal;
