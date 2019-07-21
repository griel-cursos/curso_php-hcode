<?php

$Nome = $_GET["a"];
//Array super-global $_GET[] retorna a informação da variavel dentro dos colchetes na URL
//URL = Uniform Resouce Locator

$NomeConvertido = (int)$_GET["a"];
//Converter o tipo da variavel de String para Inteiro

echo $Nome;

//Exercicio para adicionar variavel na URL
echo '<hr>';

echo 'Exibir <a href="?a=Roberto">Roberto</a>';

echo '<hr>';
//Exercicio para adicionar variavel na URL

var_dump($NomeConvertido);

echo '<hr>';

$IP = $_SERVER["REMOTE_ADDR"];
//Array super-global que retorna o IP do usuário

echo $IP;

echo '<hr>';

$Arquivo = $_SERVER["SCRIPT_NAME"];
//Array super-global que retorna o arquivo

echo $Arquivo;


?>