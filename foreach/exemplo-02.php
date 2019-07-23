<form>

<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="color" name="cor">
<input type="submit" value="Ok">



</form>

<?php

if (isset($_GET)) {
//Se houver a variavel $_GET definida	

	foreach ($_GET as $Campos => $Digitado) {
	//Para cada $_GET irá indexar em $Campos com o valor digitado em $Digitado	

		echo 'Nome do Campo: ' . $Campos . '<br>';
		echo 'Valor do Campo: ' . $Digitado . '<br>';
		echo 'A cor é: ' . $Digitado . '<br>';
		echo '<hr>';

	}
}


?>