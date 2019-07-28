<?php

function Teste($Callback) {
	
	//Processo Lento
	
	$Callback();
	
}

Teste(function() {
	
	echo "Terminou";
})

?>