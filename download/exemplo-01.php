<?php

$link = "https://www.griel.com.br/wp-content/uploads/2019/07/cropped-logo2.png";

//Ler o conteúdo binário de um arquivo
$content = file_get_contents($link);

//Interpretar o conteúdo binário do arquivo
$parse = parse_url($link);

//Pegando só o nome do arquivo
$basename = basename($parse["path"]);

//Criar um arquivo usando os dados do conteúdo
$file = fopen($basename, "w+");

//Escrevendo dentro do arquivo o conteúdo binário
fwrite($file, $content);

//Sempre fechar o arquivo após terminar de usar as funções
fclose($file);


?>

<img src="<?=$basename?>">