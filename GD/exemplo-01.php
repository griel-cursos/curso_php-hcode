<?php

header("Content-Type: image/png");
//Tipo de Arquivo

$image = imagecreate(256, 256);
//Criei uma tela de 256px por 256px

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso PHP7", $red);
//Parâmetros: Variavel, Tamanho da Fonte, Eixo X, Eixo Y, Frase para Exibir, Cor (Ou variável da cor)

imagepng($image);
//Cria uma imagem com o formato PNG

imagedestroy($image);
//Finaliza a função de imagem


?>