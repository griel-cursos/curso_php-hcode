<?php

//Se o Cookie com o nome definido existir
if (isset($_COOKIE["NOME_DO_COOKIE"])) {
	
	//Guarda um json do Cookie
	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
	
	//Exibe o objeto
	echo $obj -> empresa;
	
}

?>