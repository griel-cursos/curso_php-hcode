<?php

$cnx = new mysqli("localhost", "root", "", "dbphp7");

if ($cnx->connect_error) {
	//Se der erro de coneção, exceturar o comando abaixo
	
	echo "Erro de Conexão" . $cnx->connect_error;
	
}

/* Inserir informações no Banco de Dados */

$cnxst = $cnx->prepare("insert into tb_usuarios (deslogin, dessenha) values (?,?)");
/* Preparo a conexão $cnx para rodar um comando SQL, com valores que irei definir em bind_param */

/*Utiliza no primeiro parâmetro ss indicando que os dois primeiros ? nos valores do PREPARE serão somente strings, independente do que for informado */
$cnxst->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123abc";
//Defini duas variáveis que terão as informações de login e senha

//Comando final para executar o comando do MySQL
$cnxst->execute();

$login = "root";
$pass = "abcdef";

$cnxst->execute();

?>