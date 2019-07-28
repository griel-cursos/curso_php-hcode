<?php

require_once("config.php");

echo session_save_path();
//Exibe o caminho onde está salvo o cookie da sessão

echo '<br><br>';

var_dump(session_status());
//Exibe em número (INT) o status da sessão atual

echo '<br><br>';

//Exibindo mensagens amigáveis de acordo com o status da sessão
switch(session_status()) {
		
	case PHP_SESSION_DISABLED:
		echo "as sessões estiverem desabilitadas.";
		break;
		
	case PHP_SESSION_NONE:
		echo " as sessões estiverem habilitadas, mas nenhuma existir.";
		break;		
		
	case PHP_SESSION_ACTIVE:
		echo "as sessões estiverem habilitadas, e uma existir.";
		break;			
		
}

?>