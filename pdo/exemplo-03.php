<?php

$cnx = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
//Criando conexão MySQL usando PDO

$cnxst = $cnx->prepare("insert into tb_usuarios (deslogin, dessenha) values (:LOGIN, :PASSWORD)");
//Mesma sintáxe mas nos valores eu informo um parâmetro a ser definido com bindParam()

$login = "Jose";
$password = "qwerty";

$cnxst->bindParam(":LOGIN", $login);
$cnxst->bindParam(":PASSWORD", $password);

$cnxst->execute();

echo "Dados Inseridos";

?>