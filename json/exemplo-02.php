<?php

$json = '[{"nome":"Roberto","idade":"30"},{"nome":"Nay","idade":"32"}]';


$data = json_decode($json, true);
//Transforma um JSON em Array

var_dump($data);


?>