<?php 


// metodos estaticos sao metodos de uma classe que nao precisam 
// de um objeto instaciados para serem evocados

class  Matematica {
    public static function adicionar($a, $b){
        return $a + $b;
    }

    public function exec_op(){
        $resultado = self::adicionar(20,30); // self -> eu mesmo, a propia classe
        return true; 
    }
}

// return parent::operacao_do_pai() -> caso seja herdado algum metodo estatico

echo Matematica::adicionar(20,30); // pode chamar diretamente