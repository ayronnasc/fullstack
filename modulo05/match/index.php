<?php 
$estado = "pronto";

$resultado = match($estado){
    'processamento' => "aguarde",
    'falha' => 'um erro foi obtido',
    'pronto' => 'Tudo certo !',
    default => 'desconhecido'
};

echo $resultado;

?>