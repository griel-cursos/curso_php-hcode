<?php

$cnx = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
//Criando conexão MySQL usando PDO

$cnxst = $cnx->prepare("
	update tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID
					  ");
//Mesma sintáxe mas nos valores eu informo um parâmetro a ser definido com bindParam()

$login = "João";
$password = "uiopt";
$id = 2;

$cnxst->bindParam(":LOGIN", $login);
$cnxst->bindParam(":PASSWORD", $password);
$cnxst->bindParam(":ID", $id);

$cnxst->execute();

echo "Dados Alterados com Sucesso";

?>