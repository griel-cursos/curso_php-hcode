<?php

/*

require = Obriga que o arquivo exista e que esteja funcionando corretamente. Recomendado o uso no lugar de include

require_once = Traz o arquivo somente uma vez, evitando erros

include = Procura o arquivo, se houver ele irá incluir, senão tentará buscar no diretório padrão do PHP

*/

//include "funcao.php";

require_once "funcao.php";

$Resultado = somar(10,25);

echo $Resultado;

?>