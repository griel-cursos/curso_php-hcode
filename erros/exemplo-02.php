<?php

//Irá parar de exibir erros do tipo notice
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

?>