<?php 

class Veiculo{

    public $tipo;

    public function ligar(){
        // ...
    }

    public function desligar(){
        // ...
    }

}

// a classe veiculo vai agora ser usada para criar duas outras classes 
class Automovel extends Veiculo
{

    /*
        Alem das propiedades e metodos da classe veiculo,
        vai ainda ter as propiedades especificas desta classe
    */

    public $portas;
    public $marca;
    public $ano;

}

