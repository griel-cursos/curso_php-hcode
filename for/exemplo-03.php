<?php

echo '<select>';

for ($Ano = date("Y"); $Ano >= date("Y")-100; $Ano--) {
//Define que o ano é o ano atual ( date("Y") )
	
	echo '<option value " ' . $Ano . '">'. $Ano . '</option>';
}

echo '</select>';

?>