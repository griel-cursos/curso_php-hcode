<?php

$name = "images";

if (!is_dir($name)) {
	
	mkdir($name);
	
	echo "Diretório $name criado com sucesso.";
	
} else {
	
	rmdir($name);
	echo "O diretório $name já existe mas acabou de ser removido";
	
}

?>