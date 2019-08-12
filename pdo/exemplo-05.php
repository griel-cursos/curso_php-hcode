<?php

$cnx = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
//Criando conexão MySQL usando PDO

$cnxst = $cnx->prepare("
	delete from tb_usuarios where idusuario = :ID
					  ");
//Mesma sintáxe mas nos valores eu informo um parâmetro a ser definido com bindParam()

$id = 1;

$cnxst->bindParam(":ID", $id);

$cnxst->execute();

echo "Dados Apagado com Sucesso";

?>