<?php

$cnx = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
//Criando conexão MySQL usando PDO

$cnx->beginTransaction();

$cnxst = $cnx->prepare("
	delete from tb_usuarios where idusuario = ?
					  ");
//Mesma sintáxe mas nos valores eu informo um parâmetro a ser definido com bindParam()

$id = 2;

$cnxst->execute(array($id));

//Fazendo rollBack() ;; $cnx->rollBack();

$cnx->commit();

echo "Dados Apagado com Sucesso";

?>