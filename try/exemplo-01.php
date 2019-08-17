<?php

try  {
	//Exibir um erro na tela sem motivo 😂
	throw new Exception("Erro no Código", 500);
	
} catch(Exception $e) { //Irá capturar o erro em uma variável que pode ter qualquer nome, normalmente $e
	
	echo json_encode(array(
		"message"=>$e->getMessage(), //Exibe a Mensagem
		"line"=>$e->getLine(), 		//Exibe a linha que deu erro
		"file"=>$e->getFile(),		//Exibe o arquivo que deu erro
		"code"=>$e->getCode()		//Exibe qual o código do erro
	));
	
}

?>