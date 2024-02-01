<?php 

class Pessoa{

    public $nome;

    public function indentify(){
        echo "Foi identificado";

    }

}

class Cliente extends Pessoa
{

    public function __construct()
    {
        
    }

    public function indentify(){
        
        echo "outra identificacao"; // ao instanciar esse objeto, este metodo vai prevalecer por cima do metodo da classe pai
    }

}

$cli = new Cliente;

echo $cli->indentify();
