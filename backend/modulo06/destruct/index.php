<?php 


// existe um metodo que vai acontecer somente quando o objeto eh destruido ou quando o script termina a execucao

class Cliente {
    private $nome;

    function __construct($n)
    {
        $this->nome = $n;
        echo "Foi criado um novo objeto com o nome : " . $this->nome . "<br>";

    }   

    function __destruct() // 
    {
        echo "O objeto foi destruido. Tinha o seguinte nome : ". $this->nome . "<br>";
    }
}


$cli = new Cliente("Ayron");


// a destruicao do objeto significa destruir a variavel -> unset($cli) , ou ao findar do script