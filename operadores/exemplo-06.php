<?php

$a = NULL;
$b = 8;
$c = 10;


echo $a ?? $b ?? $c;
//Verifica se a variável existe, e se não for (??) irá passar para a próxima
?>