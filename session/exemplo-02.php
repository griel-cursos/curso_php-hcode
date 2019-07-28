<?php

//session_start();
//Prcisa ser informado em todas as páginas que irá chamar a sessão

require_once("config.php");
//Chamando o arquivo de configuração

unset($_SESSION["nome"]);
//Destroi a sessão 'nome'

echo 'Chamando a sessão diretamente sem tratamento:<br>';
echo $_SESSION['nome'];
//Exibir a sessão "nome"

echo '<BR><BR>';

//Tratamento de erro de sessão:
echo 'Chamando a sessão com o tratamento de erros:<br>';


if (isset($_SESSION["nome"])) {
//Se a sessão existir...	
	echo $_SESSION["nome"];
//exiba o valor da sessão...
} else{
//senão...	
	echo 'Não há sessões ativas';
//avise que não há sessões
}

?>