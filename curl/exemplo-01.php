<?php

$cep = "13484327";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //1 OU 0 é verdadeiro ou falso
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //Não preciso validar se o SSL é válido

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true); //True transforma o json em array

//Exibindo todos os dados retornados
print_r($data);

echo '<hr>';

//Exibindo somente a cidade
print_r($data["localidade"]);

?>