<?php 

//Verifica se uma classe existe
echo class_exists("Pessoa");

// Verifica se um metodo existe dentro de uma classe
echo method_exists("Pessoa", "falar");

// Verifica se uma propiedade existe dentro de uma classe
echo property_exists("Pessoa", "idade");