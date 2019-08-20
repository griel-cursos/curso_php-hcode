<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
	
	//$cmd = $_POST["cmd"]; == Comando não tratado e vulnerável
	
	$cmd = escapeshellcmd($_POST["cmd"]); //Tratando o comando e não rodando comandos perigosos
	
	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);
	//Executa um comando do SISTEMA, neste caso um DIR que irá na variavel $retorno

	echo "</pre>";

}
?>


<form method="post">

	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>