<form method="post">

	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php

if (isset($_POST["busca"])) {
	
	echo strip_tags($_POST["busca"], "<b>"); //Bloquear tags de HTML
	
	echo "<BR><BR>";
	
	echo htmlentities($_POST["busca"]); //Transforma as tags html em texto comum
}


?>