<?php

$image = imagecreatefromjpeg("certificado.jpg");

$TitleColor = imagecolorallocate($image, 0, 0, 0);
$Gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 450, 150, $TitleColor, __DIR__.DIRECTORY_SEPARATOR."fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");

imagettftext($image, 32, 0, 450, 200, $TitleColor, __DIR__.DIRECTORY_SEPARATOR."fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Roberto Filho");
//Parâmetros: Imagem a ser Editada, Tamanho da Fonte, ângulo do texto, Eixo X, Eixo Y, Cor do Texto, Caminho da Fonte, Texto a ser Exibido

imagestring($image, 3, 440, 370, utf8_decode("Concluído em ") . date("d/m/Y"), $TitleColor);
//Parâmetros: Imagem a Ser Editada, Tamanho da Fonte, Eixo X, Eixo Y, Frase para Exibir, Cor (Ou variável da cor)

header("Content-Type: image/jpeg");
imagejpeg($image); //Cria um arquivo fisicamente. 
//Parâmetros: Imagem, nome do arquivo, qualidade de 0 a 100
imagedestroy($image);

?>