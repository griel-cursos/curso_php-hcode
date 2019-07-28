<?php

//session_id('nl3c9dqckebj69johmed7c66qr');
//Recuparar a ID da Sessão

require_once("config.php");

session_regenerate_id();
//Boas Práticas: Sempre regenerar o ID da sessão em páginas de Login

echo session_id();
//Exibe o ID da minha sessão

echo '<br><br>';

var_dump($_SESSION);

?>