<?php 


// Metodos que podem ser herdados em diversas classes; 

// interpretar como : 
// conjunto de funcoes matematicas

trait funcoes_matematicas
{

    public function adicionar($a, $b){
        return $a + $b;
    }
    public function subtrair($a, $b){
        return $a - $b;
    }
    public function mult($a, $b){
        return $a * $b;
    }
    public function div($a, $b){
        return $a / $b;
    }

}

class Matematica{

    use funcoes_matematicas; // incorpora na classe matematica todos os metodos do trait
    

}