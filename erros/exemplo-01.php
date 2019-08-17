<?php

//Função que irá trabalhar com os erros
function error_handler($code, $message, $file, $line) {
	
	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"file"=>$file,
		"line"=>$line
	));
	
}
//Define que o erros serão gerenciados pela minha função
set_error_handler("error_handler");

//exemplo básico de erro de divisão por 0
echo 100/0;

?>