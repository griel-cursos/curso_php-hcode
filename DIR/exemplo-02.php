<?php

$images = scandir("images");
//scandir retorna o que tiver dentro da pasta em um array

$data = array();

foreach ($images as $img) {
	//images é o array e img é um item do array
	
	if (!in_array($img, array(".", ".."))) {
		//in_array busca em array (onde estou procurand, o que estou procurando)
		//Essa linha ignora as posições iniciais que exibem somente . e ..
		
		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		
		$info = pathinfo($filename);
		
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/cursophp/DIR/" . str_replace("\\", "/", $filename);
		
		array_push($data, $info);
		
	}
	
}

$imagem = "images/php7.png";

function Tamanho($imagem) {
	$bytes = filesize($imagem);
            
	if ($bytes >= 1073741824) {
		return number_format($bytes / 1073741824, 2) . ' GB';
	} elseif ($bytes >= 1048576) {
 		return number_format($bytes / 1048576, 2) . ' MB';
	} elseif ($bytes >= 1024) {
		return number_format($bytes / 1024, 2) . ' KB';
	} elseif ($bytes > 1) {
		return $bytes . ' bytes';
	} elseif ($bytes == 1) {
		return '1 byte';
	} else {
		return '0 bytes';
	}
}

echo Tamanho($imagem);

echo "<br><br>";

echo json_encode($data);

?>