<?php

$Nome = "Roberto";

function teste () {
	//Um escopo fica dentro de chaves
	
	global $Nome;
	//Chama a variável fora da função
	
	echo $Nome;
	//Chamando a variavel dentro da função, ela precisa ser definida ou chamada dentro da função

}

function teste2() {
	
	$Nome = "Nay";
	//Uma variável dentro da função pode ter o mesmo nome da variável global
	
	echo $Nome . " agora na função teste2()";
	
}


teste();

teste2();



?>