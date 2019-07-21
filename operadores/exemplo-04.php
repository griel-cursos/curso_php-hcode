<?php

$a = 55.0;
$b = 55;

var_dump($a > $b);
//Verifica ser $a é maior que $b
echo '<br>';
var_dump($a < $b);
//Verifica ser $a é menor que $b
echo '<br>';
var_dump($a == $b);
//Verifica se $a é igual a $b. Para comparar, utilizamos dois ==
//Um sinal de = apenas atribuição
echo '<br>';
var_dump($a === $b);
//Verifica se os valores são idênticos, igualdade de identidade
echo '<br>';
var_dump($a != $b);
//Verifica se é diferente, utilizados !=
echo '<br>';
var_dump($a !== $b);
//Verifica se é diferente, também no tipo de dado informado

?>