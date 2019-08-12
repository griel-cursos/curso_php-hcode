<?php

$cnx = new mysqli("localhost", "root", "", "dbphp7");

if ($cnx->connect_error) {
	//Se der erro de coneção, exceturar o comando abaixo
	
	echo "Erro de Conexão" . $cnx->connect_error;
	
}

$resultado = $cnx->query("select * from tb_usuarios order by idusuario");

$data = array();

while ($linha = $resultado->fetch_array()) {
	
	//Adicionar itens à um array já existente
	array_push($data, $linha);
	
}

echo json_encode($data);

?>