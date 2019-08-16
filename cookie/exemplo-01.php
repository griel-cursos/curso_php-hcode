<?php

//Apenas uma informação de Exemplo
$data = array (
	"empresa"=>"Griel"
);

//Função de Criar Cookies
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);
//		Nome do Cookie, 	Conteúdo do Cookie	 Tempo para expirar o Cookie, neste caso, uma hora.

echo "Ok";


?>