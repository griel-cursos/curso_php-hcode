<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
					//Informo que o modo de exibir do setlocale deve ser nestes formatos. Padrão, UTF-8 e Windows
		//LC_ALL = muda toda configuração de localização para português

echo strftime("%A %B");
echo '<br>';
echo 'Lista de Parâmetros do strftime(): <a href="https://www.php.net/manual/pt_BR/function.strftime.php">Manual PHP</a>';
echo '<br><br>';
echo ucwords(strftime("hoje é dia %A do mês %B"));


?>