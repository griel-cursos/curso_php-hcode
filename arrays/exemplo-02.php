<?php

//Exemplos de Arrays Bi-Dimensionais

//Primeiro colchete é o índice; Segundo colchete é a posição daquele índice
$Carros [0][0] = "GM";
$Carros [0][1] = "Cobalt";
$Carros [0][2] = "Onix";
$Carros [0][3] = "Camaro";
//Variavel [Indice] [Posicao] = "Nome" | 

$Carros [1][0] = "Ford";
$Carros [1][1] = "Fiesta";
$Carros [1][2] = "Fusion";
$Carros [1][3] = "Ecosport";

echo 'Exibe o array no índice 0, posição 3: ' . $Carros[0][3];
//Exibe da array $Carros o que tem na posição 3 do índice 0

echo '<br>';

echo 'Exibe o array no índice 1, posição 3: ' . $Carros[1][3];

echo '<br>';

echo 'Exibe a última informação do Array no índice 1: ' . end($Carros[1]);
//Exibe a ultima informação do indice 1

echo '<br>';




?>