<?php

require_once("config.php");

/* $sql = new SQL();

$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);*/

$root = new Usuario();
$root->loadById(4);
echo $root;
?>