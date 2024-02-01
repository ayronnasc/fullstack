<?php 
    $dados = file_get_contents('dados.txt'); // pega os dados do arquivo
    echo nl2br($dados); // a cada nova linha ele quebra no html


    $dados = file_get_contents('dados.txt', offset:6, length:40); // limita o conteudo a ser lido

    $dados = fopen('dados.txt', 'r'); // abre o arquivo na variavel | r - read | w - write | a - append
    feof($dados); // verifica se chegou ao final do arquivo
    fclose($dados); // fecha o arquivo

?>