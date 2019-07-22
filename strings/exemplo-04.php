<?php

/*

strpos = Retorna qual posição a letra está
strnlen = Conta quantas letras tem na variável

*/

$Frase = "A repetição é mãe da retenção.";

$Palavra = "mãe";

$q = strpos($Frase, $Palavra);
//Verifica em qual posição a palavra está na variável

var_dump($q);

echo '<br><br>';

$Texto = substr($Frase, 0, $q);
//Variavel Função $Alvo, Posição inicial, $Até onde buscar
//Retornar somente o texto antes da palavra
var_dump($Texto);

echo '<br><br>';

$Texto2 = substr($Frase, $q + strlen($Palavra), strlen($Frase) );
//                       Variavel + três letras  Total de Letras da Variavel

var_dump($Texto2);

?>