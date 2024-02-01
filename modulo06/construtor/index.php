<?php 
// o metodo construtor eh executado automaticamente toda ves em que um objeto eh instanciado

class Mulher{
    private $nome;
    private $apelido;

    function __construct($n , $a)
    {
        $this->nome = $n;
        $this->apelido = $a;
    }

    function getNome(){
        return $this->nome;
    }

    function getApelido(){
        return $this->apelido;
    }
} 

$w = new Mulher("Fabiana", "Fabinha");

echo $w->getNome();
echo $w->getApelido();