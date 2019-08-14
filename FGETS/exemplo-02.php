<?php

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));
	//Transforma o conteúdo em texto (base64_encode) | file_get_contents() lê o conteúdo inteiro do arquivo

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
//Chamo uma classe para obter informações internas do arquivo
$mimetype = $fileinfo->file($filename);
//Irá retornar o tipo do arquivo

$base64encode = "data:". $mimetype . ";base64," . $base64;



?>

<a href="<?=$base64encode?>" target="_blank">Link para Imagem</a>

<br><br>

<img src="<?=$base64encode?>">
//Entre as aspas não pode haver espaços