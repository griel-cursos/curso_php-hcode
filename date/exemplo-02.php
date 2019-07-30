<?php

echo strtotime("2001-09-11");
echo '<br>';
$ts = strtotime("2001-09-11");
//Descobrir o timestamp de uma data específica



$tsnow = strtotime("+1 day");
//Somar dias à data atual. Exemplo, +1 day = mais um dia, +2 weeks = mais duas semanas



echo date("l, d/m/Y", $ts);
//Exibe a data de um determinado timestamp, neste caso a que foi definida na variavel $ts

echo '<br><br>';

echo date("l, d,m,Y", $tsnow);

?>