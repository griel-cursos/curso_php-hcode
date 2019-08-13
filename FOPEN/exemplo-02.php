<?php

//Criar arquivo CSV

require_once("config.php");

$sql = new SQL();
$usuarios = $sql->select("select * from tb_usuarios order by deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	
	array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) {
	
	$data = array();
	
	foreach ($row as $key => $value) {
		array_push($data, $value);
	}//Este fecha o foreach de coluna
	
	fwrite($file, implode(",", $data) . "\r\n");
	
} //Este fecha o foreach de linha

fclose($file);


?>