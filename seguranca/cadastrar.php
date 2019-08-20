<?php

$email = $_POST["inputEmail"];
//Carrega o que vier pelo POST

$ch = curl_init();
//Inicia um sistema curl

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
//URL que vou chamar
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//Desativo a verificação de SSL do servidor
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//Desativo a verificação de SSL da página
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array( //Criar um Array no HTML
	"secret"=>"6LdK_7MUAAAAAG6m_1dLbrkHI_xLYqNArh8XMVVa", //Chave secreta
	"response"=>$_POST["g-recaptcha-response"], //Tipo de resposta
	"remoteip"=>$_SERVER["REMOTE_ADDR"] //IP do usuário
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Recupera a resposta do servidor, e o parametro true

$recaptcha = json_decode(curl_exec($ch), true);
//Guarda a informação que foi retornada em um array com json e uso true para ser um array

curl_close($ch);
//Fecho a conexão

if ($recaptcha["success"] === true) {
	
	echo "Ok: " . $_POST["inputEmail"];
}

else {
	header("Location: exemplo-04.php");
}

?>