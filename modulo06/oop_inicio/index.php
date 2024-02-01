<?php 

class Homem {
    public $nome; // acess modifier padrao 
    protected $apelido ;// pode ser acessada dentro da classe e dentro de classes derivadas(herdadas) dela;
    private $cor_do_cabelo; // so pode ser acessado dentro da classe
}
 

$h = new Homem();

$h->nome = "Ayron"; // certo
// $h->apelido = "Pimenta"; // erro
// $h->cor_do_cabelo = "Azul"; // erro 