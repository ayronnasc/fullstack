<?php

final class Classe_unica
{
    // esta classe nao vai poder ser herdada (usando o extends)

}

class Pessoa
{
    public function ident()
    {
        // funcao publica que pode ser herdada
    }

    final public function falar(){
        // funcao que nao pode ser herdada para fazer novas implementacoes por conta do -> final <-
    }
}
