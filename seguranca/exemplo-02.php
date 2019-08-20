<?php

$id = (isset($_GET["id"])) ? $_GET["id"]:4;
//Pegando parametro da url e se não houver, será 1

if (!is_numeric($id) || strlen($id) > 5) { //Função que bloqueia qualquer parametro que não seja numerico ou com mais de 5 caracteres
	
	exit("Operação Cancelada");
	
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");
//Conexão Simples de MySQLi

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";
//Exibindo tudo da tabela onde id do usuario for $id

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
	
	echo $resultado->deslogin . "<br>";
}

?>