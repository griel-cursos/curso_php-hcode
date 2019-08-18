<?php

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

//Pegando o tamanho da imagem método 1
$data = getimagesize($file); // Função que pega o tamanho da imagem e transforma em array
$width = $data[0]; //Pega a largura na posição 0
$height = $data[1]; //Pega a altura na posição 1

//Pegando o tamanho da imagem método NOVO
list($old_width, $old_height) = getimagesize($file);

$NewImage = imagecreatetruecolor($new_width, $new_height);
$OldImage = imagecreatefromjpeg($file);

imagecopyresampled( //Parâmetros Listado nas Linhas
		$NewImage, //Imagem de Destino
		$OldImage, //Imagem de Origem
		0, //Eixo X da Imagem de Destino
		0, //Eixo Y da Imagem de Destino
		0, //Eixo X da Imagem de Origem
		0, //Eixo Y da Imagem de Origem
		$new_width, //Largura da Imagem de Destino
		$new_height, //Altura da Imagem de Destino
		$old_width, //Largura da Imagem de Origem
		$old_height //Altura da Imagem de Origem
	);

imagejpeg($NewImage);
//Cria a nova imagem

imagedestroy($OldImage);
imagedestroy($NewImage);
//Apaga os registros das imagens da memória

?>