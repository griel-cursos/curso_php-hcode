<?php

require_once("config.php");

/* $sql = new SQL();

$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);*/

/* Carrega somente um usuário:
$root = new Usuario();
$root->loadById(4);
echo $root;
*/

//Carrega a Lista de Usuários

//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuários buscando pelo login

//$search = Usuario::search("Ro");

//echo json_encode($search);


//Carregar um usuário usando login e senha

//$usuario = new Usuario();
//$usuario->login("Jose", "qwerty");
//echo $usuario;


$aluno = new Usuario("aluno_teste", "gi4j43");

$aluno->insert();

echo $aluno;



?>