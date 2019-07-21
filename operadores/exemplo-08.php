<?php

$Resultado = (10 + 3) / 2;
//Em parenteses força a operação matemática

echo $Resultado;

echo '<br><br>';

$Comparador = (10 + 3) / 2 > 5 && 10 + 5 < 3;
//                       Adiciona um comparador. 
//Explicando: Verifica se X é maior que Y e se (&&) Y é menor que Z

var_dump($Comparador);

echo '<br><br>';

$Comparador2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;
//                       Adiciona um comparador. 
//Explicando: Verifica se X é maior que Y ou se (||) Y é menor que Z

var_dump($Comparador2);

?>