<?php 


// classes abstratas com metodos abstratos so podem ser inserido codigo nos metodos
// pelas classes herdadas

abstract class Pessoa{

    abstract public function indentificar();
    abstract public function falar();
    abstract public function saltar();

}

// todas as classes que a herdarem sao obrigadas a fazerem um metodo com o nome do metodo 
// herdado da classe Pessoa por Exemplo 

// class Cliente extends Pessoa{
//     // error, pois contem tres metodos abstratos nao declarados
// }
 
class Cliente extends Pessoa{ 
    
    // AGORA NAO AH ERRO

  public function indentificar()
  {
    
  }

  public function falar()
  {
    
  }

  public function saltar()
  {
    
  }
}