<?php

$Nome = "Roberto";
$Site = 'www.griel.com.br';
//Variaveis do tipo String

$Ano = 1989;
$Salario = 5500.99;
//Variaveis do tipo Inteiros, números

$Bloqueado = false;
//Variaveis do tipo objeto, bool

$Frutas = array("Abacaxi", "Laranja", "Manga");
//Variaveis do tipo Array. Toda Array começa em 0

//echo $Frutas[2];
//Exibir a Array na posição 2

echo '<br><br>';

$Nascimento = new DateTime();
//Variavel com POO iniciando a data e hora

//var_dump($Nascimento);

//////////////////////////////////////////////////////

$Arquivo = fopen("exemplo-03.php", "r");
//		   ^^^^- Comando para manipular arquivos

//var_dump($Arquivo);

/////////////////////////////////////////////////////////

$Nulo = NULL;
//Nulo é ausencia total de valores

$Vazio = "";
//Espaço vazio é uma variavel que existe mas não tem informações
?>