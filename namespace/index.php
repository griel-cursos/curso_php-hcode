<?php

require_once("config.php");

use Cliente\Cadastro;
//Usar o namespace da pasta onde há os arquivos que eu quero usar

$Cad = new Cadastro();

$Cad->setNome("Roberto Griel Filho");
$Cad->setEmail("roberto@griel.com.br");
$Cad->setSenha("123456");


$Cad->RegistrarVenda();

?>